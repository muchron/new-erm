<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Operasi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OperasiController extends Controller
{
    public function index()
    {
        return view('dashboard.content.operasi.list_operasi', [
            'title' => 'Data Operasi',
        ]);
    }
    public function json()
    {
        $data = Operasi::all()->take(50);
        return DataTables::of($data)
            ->editColumn('nama_operasi', function ($data) {
                return $data->paketOperasi->nm_perawatan;
            })
            ->editColumn('dokter', function ($data) {
                return $data->dokter->nm_dokter;
            })
            ->editColumn('asisten1', function ($data) {
                return $data->asisten1->nama;
            })
            ->editColumn('asisten2', function ($data) {
                return $data->asisten2->nama;
            })
            ->editColumn('dokterAnestesi', function ($data) {
                return $data->dokterAnestesi->nm_dokter;
            })
            ->editColumn('asistenAnestesi', function ($data) {
                return $data->asistenAnestesi->nama;
            })
            ->editColumn('dokterAnak', function ($data) {
                return $data->dokterAnak->nm_dokter;
            })
            ->editColumn('pembiayaan', function ($data) {
                return $data->pembiayaan->png_jawab;
            })
            ->make(true);
    }
}
