<?php

namespace App\Http\Controllers;

use App\Models\KamarInap;
use App\Models\PasienBayi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PasienBayiController extends Controller
{
    public function index()
    {
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
            })->get();

            $bayiPerawatan = KamarInap::where('kd_kamar', 'like', '%BY%')
                ->where('stts_pulang', '!=', 'Pindah Kamar')
                ->whereYear('tgl_keluar', 2021)
                ->whereMonth('tgl_keluar', $i)
                ->get();

            $jmlSemuaBayi[$i] = $semuaBayi->count();
            $jmlBayiPerawatan[$i] = $bayiPerawatan->count();
            $jmlBayiSehat[$i] = $semuaBayi->count() - $bayiPerawatan->count();
        }

        return response()->json([$jmlSemuaBayi, $jmlBayiPerawatan, $jmlBayiSehat]);
    }
}
