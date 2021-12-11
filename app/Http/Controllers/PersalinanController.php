<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Persalinan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PersalinanController extends Controller
{
    public function index()
    {
        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();
        return view('dashboard.content.persalinan.list_tindakan_persalinan', [
            'title' => 'Laporan Tindakan Persalinan',
            'bigTitle' => 'Persalinan',
            'month' => $awalBulan->translatedFormat('d F Y') . ' s/d ' . $sekarang->translatedFormat('d F Y'),
            'dateNow' => $sekarang->toDateString(),
            'dateStart' => $awalBulan->toDateString()
        ]);
    }

    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');

        $data = Persalinan::whereHas('rawatInap', function ($query) {
            $query->where('nm_perawatan', 'like', '%Partus%');
        })->orderBy('tgl_perawatan', 'ASC');

        if ($request->ajax()) {
            if ($request->tgl_pertama && $request->tgl_kedua) {
                $data->whereBetween('tgl_perawatan', [$request->tgl_pertama . ' 00:00:00', $request->tgl_kedua . ' 00:00:00'])
                    ->whereHas('regPeriksa', function ($query) use ($request) {
                        $query->whereHas('penjab', function ($query) use ($request) {
                            $query->where('png_jawab', 'like', '%' . $request->pembiayaan . '%');
                        });
                    })
                    ->whereHas('dokter', function ($query) use ($request) {
                        if ($request->dokter) {
                            $query->where('kd_dokter', $request->dokter);
                        }
                    });
            } else {
                $data->whereBetween('tgl_perawatan', [$tanggal->startOfMonth()->toDateString() . ' 00:00:00', $tanggal->lastOfMonth()->toDateString() . ' 00:00:00']);
            }
        }


        return DataTables::of($data)
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && $request->get('search')['value']) {
                    return $query->whereHas('dokter', function ($query) use ($request) {
                        $query->where('nm_dokter', 'like', '%' . $request->get('search')['value'] . '%');
                    });
                }
            })
            ->editColumn('tgl_perawatan', function ($data) use ($tanggal) {
                return $tanggal->parse($data->tgl_perawatan)->translatedFormat('d F Y') . ' ( ' . $data->jam_rawat . ' )';
            })
            ->editColumn('pembiayaan', function ($data) {
                return $data->pembiayaan->png_jawab;
            })
            ->editColumn('dokter', function ($data) {
                return $data->dokter->nm_dokter;
            })
            ->editColumn('nm_perawatan', function ($data) {
                return $data->rawatInap->nm_perawatan;
            })
            ->make(true);
    }
}
