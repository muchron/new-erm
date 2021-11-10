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
        $tanggal = new Carbon('first day of this month');
        return view('dashboard.content.igd.laporan', [
            'title' => 'Laporan IGD',
            'bigTitle' => 'Laporan IGD',
            'month' => $tanggal->monthName,
        ]);
    }

    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('first day of this month');
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
