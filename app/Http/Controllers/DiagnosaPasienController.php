<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiagnosaPasien;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class DiagnosaPasienController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.content.rekammedis.list_diagnosa',
            [
                'title' => 'Data Rekam Medis',
                'bigTitle' => 'Rekam Medis',
            ]
        );
    }
    public function json(Request $request)
    {

        $data = '';
        $start = new Carbon('first day of last month');
        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) || !empty($request->tgl_kedua)) {
                $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
                    ->where('prioritas', 1)
                    ->with('regPeriksa.dokter.spesialis')
                    ->where('status', $request->status)
                    ->whereHas('regPeriksa', function ($query) use ($request) {
                        $query->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua]);
                    })
                    ->whereHas('regPeriksa.dokter.spesialis', function ($query) use ($request) {
                        $query->where('nm_sps', 'like', $request->kategori);
                    })
                    ->groupBy('kd_penyakit')
                    ->orderBy('jumlah', 'desc')
                    ->limit(10)
                    ->get();
            } else {
                $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
                    ->where('prioritas', 1)
                    ->whereHas('regPeriksa', function ($query) use ($start) {
                        $query->whereBetween('tgl_registrasi', [$start->startOfMonth()->toDateString(), $start->lastOfMonth()->toDateString()]);
                    })
                    ->groupBy('kd_penyakit')
                    ->limit(10)
                    ->get();
            }
        }
        return DataTables::of($data)
            ->editColumn('nm_penyakit', function ($data) {
                return $data->penyakit->nm_penyakit;
            })
            ->editColumn('status', function ($data) {
                return ($data->status == 'Ralan' ? 'Rawat Jalan' : 'Rawat Inap');
            })
            ->make(true);
    }
}
