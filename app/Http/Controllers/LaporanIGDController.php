<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RegPeriksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanIGDController extends Controller
{
    public function index()
    {
        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();
        return view('dashboard.content.igd.laporan', [
            'title' => 'Laporan IGD',
            'bigTitle' => 'Laporan IGD',
            'month' => $awalBulan->translatedFormat('d F Y') . ' s/d ' . $sekarang->translatedFormat('d F Y'),
            'dateNow' => $sekarang->toDateString(),
            'dateStart' => $awalBulan->toDateString()

        ]);
    }

    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');
        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) || !empty($request->tgl_kedua)) {
                $data = RegPeriksa::select(DB::raw("*, SUM(status_lanjut = 'Ranap') as ranap, SUM(status_lanjut = 'Ralan') as ralan"))
                    ->where('kd_poli', 'IGDK')
                    ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->get();
            } else {
                $data = RegPeriksa::select(DB::raw("*, SUM(status_lanjut = 'Ranap') as ranap, SUM(status_lanjut = 'Ralan') as ralan"))
                    ->where('kd_poli', 'IGDK')
                    ->whereBetween('tgl_registrasi', [$tanggal->startOfMonth()->toDateString(), $tanggal->lastOfMonth()->toDateString()])
                    ->get();
            }
        }
        return json_encode($data);
    }
}
