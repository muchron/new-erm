<?php

namespace App\Http\Controllers;

use App\Models\KamarInap;
use App\Models\PasienBayi;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Yajra\DataTables\DataTables;

class PasienBayiController extends Controller
{
    public function index()
    {
        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();

        return view('dashboard.content.ranap.list_bayi', [
            'title' => 'Pasien Bayi',
            'bigTitle' => 'Bayi',
            'month' => 'Per Tanggal : ' . $sekarang->translatedFormat('d F Y'),
            'tglSekarang' => $sekarang->toDateString(),
            'tglAwal' => $awalBulan->toDateString(),

        ]);
    }

    public function json()
    {
        $tanggal = new Carbon();
        $semuaBayi[] = '';
        $bayiPerawatan[] = '';
        for ($i = 1; $i <= 12; $i++) {

            $semuaBayi = PasienBayi::whereHas('pasienBayi', function ($query) use ($i) {
                $query->whereYear('tgl_lahir', 2021);
                $query->whereMonth('tgl_lahir', $i);
            });

            $bayiPerawatan = KamarInap::where('kd_kamar', 'like', '%BY%')
                ->where('stts_pulang', '!=', 'Pindah Kamar')
                ->whereYear('tgl_keluar', 2021)
                ->whereMonth('tgl_keluar', $i);

            $jmlSemuaBayi = $semuaBayi->count();
            $jmlBayiPerawatan = $bayiPerawatan->count();
            $jmlBayiSehat = $jmlSemuaBayi - $jmlBayiPerawatan;

            $bulan = $tanggal->month($i)->translatedFormat('F');

            $bayi["$bulan"] = (object)[
                'bulan' => $bulan,
                'semuaBayi' => $jmlSemuaBayi,
                'bayiPerawatan' => $jmlBayiPerawatan,
                'bayiSehat' => $jmlBayiSehat
            ];
        }
        // return json_encode($bayi);

        return DataTables::of($bayi)->make(true);
    }
}
