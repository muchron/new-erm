<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiagnosaPasien;
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
        if ($request->ajax) {
            $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
                ->where('prioritas', 1)
                ->where('status', $request->status)
                ->where('status', $request->status)
                ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                ->groupBy('kd_penyakit')
                ->get();
        } else {
            $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
                ->where('prioritas', 1)
                ->groupBy('kd_penyakit')
                ->get();
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
