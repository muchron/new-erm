<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\DiagnosaPasien;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class LaporanDiagnosaPenyakitController extends Controller
{
    public function index()
    {
        $date = new Carbon('this month');
        return view(
            'dashboard.content.rekammedis.list_penyakit',
            [
                'bigTitle' => 'Laporan Pemeriksaan Diagnosa Penyakit',
                'title' => 'Laporan Diagnosa Penyakit',
                'month' => $date->monthName,
                'dateStart' => $date->startOfMonth()->toDateString(),
                'dateNow' => $date->now()->toDateString()
            ]
        );
    }
    public function json(Request $request)
    {
        $data = '';
        $start = new Carbon('first day of this month');
        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) || !empty($request->tgl_kedua)) {
                $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
                    ->where('prioritas', 1)
                    ->with('regPeriksa.dokter.spesialis')
                    ->where('status', $request->status)
                    ->whereHas('regPeriksa', function ($query) use ($request) {
                        $query->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua]);
                    })
                    ->groupBy('kd_penyakit')
                    ->orderBy('jumlah', 'desc')
                    ->get();
            } else {
                $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
                    ->where('prioritas', 1)
                    ->whereHas('regPeriksa', function ($query) use ($start) {
                        $query->whereBetween('tgl_registrasi', [$start->startOfMonth()->toDateString(), $start->lastOfMonth()->toDateString()]);
                    })
                    ->groupBy('kd_penyakit')
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
