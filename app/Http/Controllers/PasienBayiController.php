<?php

namespace App\Http\Controllers;

use App\Models\KamarInap;
use App\Models\PasienBayi;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Yajra\DataTables\DataTables;

use function PHPUnit\Framework\isNull;

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

    public function json(Request $request)
    {
        $tanggal = new Carbon();
        $semuaBayi[] = '';
        $bayiPerawatan[] = '';

        if ($request->ajax()) {

            $tahun = $request->tahun ? $request->tahun : date('Y');

            for ($i = 1; $i <= 12; $i++) {
                $semuaBayi = PasienBayi::whereHas('pasienBayi', function ($query) use ($i, $tahun) {
                    $query->whereYear('tgl_lahir', $tahun);
                    $query->whereMonth('tgl_lahir', $i);
                });

                $bayiPerawatan = KamarInap::where('kd_kamar', 'like', '%BY%')
                    ->where('stts_pulang', '!=', 'Pindah Kamar')
                    ->whereYear('tgl_keluar', $tahun)
                    ->whereMonth('tgl_keluar', $i);

                $jmlSemuaBayi = $semuaBayi->count();
                $jmlBayiPerawatan = $bayiPerawatan->count();
                $jmlBayiSehat = $jmlSemuaBayi - $jmlBayiPerawatan;

                $indexBulan = $tanggal->month($i)->translatedFormat('F');

                $bayi["$indexBulan"] = (object)[
                    'bulan' => $indexBulan,
                    'semuaBayi' => $jmlSemuaBayi,
                    'bayiPerawatan' => $jmlBayiPerawatan,
                    'bayiSehat' => $jmlBayiSehat
                ];
            }
        }
        return DataTables::of($bayi)->make(true);
    }

    public function getTahun($tahun)
    {

        $tanggal = new Carbon();
        $semuaBayi[] = '';
        $bayiPerawatan[] = '';

        for ($i = 1; $i <= 12; $i++) {
            $semuaBayi = PasienBayi::whereHas('pasienBayi', function ($query) use ($i, $tahun) {
                $query->whereYear('tgl_lahir', $tahun);
                $query->whereMonth('tgl_lahir', $i);
            });

            $bayiPerawatan = KamarInap::where('kd_kamar', 'like', '%BY%')
                ->where('stts_pulang', '!=', 'Pindah Kamar')
                ->whereYear('tgl_keluar', $tahun)
                ->whereMonth('tgl_keluar', $i);

            $jmlSemuaBayi = $semuaBayi->count();
            $jmlBayiPerawatan = $bayiPerawatan->count();
            $jmlBayiSehat = $jmlSemuaBayi - $jmlBayiPerawatan;

            $indexBulan = $tanggal->month($i)->translatedFormat('F');

            $bayi["$indexBulan"] = (object)[
                'bulan' => $indexBulan,
                'semuaBayi' => $jmlSemuaBayi,
                'bayiPerawatan' => $jmlBayiPerawatan,
                'bayiSehat' => $jmlBayiSehat
            ];
        }

        return $bayi;
    }
}
