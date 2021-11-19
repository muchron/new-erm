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
        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();
        return view('dashboard.content.operasi.list_operasi', [
            'title' => 'Data Operasi',
            'bigTitle' => 'Operasi',
            'month' => $awalBulan->translatedFormat('d F Y') . ' s/d ' . $sekarang->translatedFormat('d F Y'),
            'dateNow' => $sekarang->toDateString(),
            'dateStart' => $awalBulan->toDateString()
        ]);
    }
    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();
        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) || !empty($request->tgl_kedua)) {
                $data = Operasi::whereBetween('tgl_operasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->whereHas('paketOperasi', function ($query) use ($request) {
                        if ($request->operasi == 'SC') {
                            $query->where('nm_perawatan', 'like', '%SC%');
                            $query->orWhere('nm_perawatan', 'like', '%Sectio Caesaria%');
                        } else {
                            $query->where('nm_perawatan', 'not like', '%partus%');
                            $query->where('nm_perawatan', 'not like', '%normal%');
                        }
                    });
            } else {
                $data = Operasi::with('paketOperasi')
                    ->whereBetween('tgl_operasi', [$awalBulan->toDateString(), $sekarang->toDateString()]);
                // ->whereHas('paketOperasi', function ($query) {
                //     $query->where('nm_perawatan', 'like', '%SC%');
                //     $query->orWhere('nm_perawatan', 'not like', '%Sectio Caesaria%');
                // });;
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
