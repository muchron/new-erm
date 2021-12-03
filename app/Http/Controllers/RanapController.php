<?php

namespace App\Http\Controllers;

use App\Models\DiagnosaPasien;
use Carbon\Carbon;
use App\Models\RegPeriksa;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Yajra\DataTables\DataTables;

class RanapController extends Controller
{
    public function laporanBpjs()
    {
        $tanggal = new Carbon('this month');
        return view(
            'dashboard.content.ranap.laporan_kunjungan_ranap',
            [
                'title' => 'Laporan Rawat Inap',
                'bigTitle' => 'Laporan Rawat Inap',
                'month' => $tanggal->now()->monthName,
                'tglAwal' => $tanggal->startOfMonth()->toDateString(),
                'tglSekarang' => $tanggal->now()->toDateString(),
            ]
        );
    }

    public function jsonRanap(Request $request)
    {
        $tanggal = new Carbon('this month');
        $data[] = '';
        if ($request->ajax()) {
            if ($request->tgl_pertama && $request->tgl_kedua) {
                $data = RegPeriksa::select('no_rawat', 'tgl_registrasi', 'kd_dokter', 'no_rkm_medis')
                    ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->where('status_lanjut', 'Ranap')
                    ->whereHas('penjab', function ($query) {
                        $query->where('png_jawab', 'like', '%bpjs%');
                    })
                    ->whereHas('kamarInap', function ($query) {
                        $query->where('stts_pulang', '!=', 'Pindah Kamar');
                    })
                    ->whereHas('dokter.spesialis', function ($query) {
                        $query->whereIn('kd_sps', ['S0001', 'S0003']);
                    })
                    ->groupBy('no_rawat');
            } else {
                $data = RegPeriksa::select('no_rawat', 'tgl_registrasi', 'kd_dokter', 'no_rkm_medis')
                    ->whereBetween('tgl_registrasi', [$tanggal->startOfMonth()->toDateString(), $tanggal->lastOfMonth()->toDateString()])
                    ->where('status_lanjut', 'Ranap')
                    ->whereHas('penjab', function ($query) {
                        $query->where('png_jawab', 'like', '%bpjs%');
                    })
                    ->whereHas('kamarInap', function ($query) {
                        $query->where('stts_pulang', '!=', 'Pindah Kamar');
                    })
                    ->whereHas('dokter.spesialis', function ($query) {
                        $query->whereIn('kd_sps', ['S0001', 'S0003']);
                    })
                    ->groupBy('no_rawat');
            }
        }

        return DataTables::of($data)
            ->editColumn('tgl_registrasi', function ($data) use ($tanggal) {
                return $tanggal->parse($data->tgl_registrasi)->translatedFormat('d F Y');
            })
            ->editColumn('no_ktp', function ($data) {
                return $data->pasien->no_ktp;
            })
            ->editColumn('nm_pasien', function ($data) {
                return $data->pasien->nm_pasien;
            })
            ->editColumn('no_peserta', function ($data) {
                return $data->pasien->no_peserta;
            })
            ->editColumn('no_tlp', function ($data) {
                return $data->pasien->no_tlp;
            })
            ->editColumn('alamat', function ($data) {
                return $data->pasien->alamat . ", "
                    . $data->pasien->kelurahan->nm_kel . ", "
                    . $data->pasien->kecamatan->nm_kec . ", "
                    . $data->pasien->kabupaten->nm_kab;
            })
            ->editColumn('nm_dokter', function ($data) {
                return $data->dokter->nm_dokter;
            })
            ->editColumn('nm_sps', function ($data) {
                return $data->dokter->spesialis->nm_sps;
            })
            ->editColumn('tgl_masuk', function ($data) use ($tanggal) {
                return $tanggal->parse($data->kamarInap->tgl_masuk)->translatedFormat('d F Y');
            })
            ->editColumn('tgl_keluar', function ($data) use ($tanggal) {
                if ($data->kamarInap->tgl_keluar == '0000-00-00') {
                    return 'Belum Pulang';
                } else {
                    return $tanggal->parse($data->kamarInap->tgl_keluar)->translatedFormat('d F Y');
                }
            })
            ->editColumn('diagnosa', function ($data) {
                if ($data->diagnosaPasien) {
                    return $data->diagnosaPasien->kd_penyakit;
                } else {
                    return '-';
                }
            })
            ->editColumn('kamar', function ($data) {
                return $data->kamarInap->kd_kamar;
            })
            ->make(true);
    }
}
