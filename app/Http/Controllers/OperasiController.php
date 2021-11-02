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
    public function json(Request $request)
    {
        $data = '';
        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) || !empty($request->tgl_kedua)) {
                $data = Operasi::whereBetween('tgl_operasi', [$request->tgl_pertama, $request->tgl_kedua])->get();
            } else {
                $data = Operasi::where('tgl_operasi', '>=', Carbon::now())->get();
            }
        }
        return DataTables::of($data)
            ->editColumn('tgl_operasi', function ($data) {
                return Carbon::parse($data->tgl_operasi)->translatedFormat('d F Y (H:i:s)');
            })
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
            ->editColumn('omloop', function ($data) {
                return $data->omloops->nama;
            })
            ->editColumn('pembiayaan', function ($data) {
                return $data->pembiayaan->png_jawab;
            })
            ->make(true);
    }
}
