<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RegPeriksa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RalanController extends Controller
{
    public function index()
    {
        $tanggal = new Carbon('this month');
        return view(
            'dashboard.content.ralan.list_status_pasien',
            [
                'title' => 'Kunjungan Rawat Jalan',
                'bigTitle' => 'Kunjungan Rawat Jalan',
                'month' => Carbon::now()->monthName,
                'tglAwal' => $tanggal->startOfMonth()->toDateString(),
                'tglSekarang' => $tanggal->now()->toDateString(),
            ]
        );
    }

    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');

        if ($request->ajax()) {
            if ($request->tgl_pertama && $request->tgl_kedua) {
                $data = RegPeriksa::where('stts_daftar', 'like', '%' . $request->status . '%')
                    ->where('stts', '!=', 'Batal')
                    ->whereIn('kd_poli', ['P001', 'P003', 'P008', 'P007', 'P009'])
                    ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->whereHas('dokter.spesialis', function ($query) use ($request) {
                        $query->where('nm_sps', 'like', '%' . $request->poli . '%');
                    })
                    ->whereHas('dokter', function ($query) use ($request) {
                        $query->where('kd_dokter', 'like', '%' . $request->kd_dokter . '%');
                    })->orderBy('tgl_registrasi', 'asc');
            } else {
                $data = RegPeriksa::whereIn('kd_poli', ['P001', 'P003', 'P008', 'P007', 'P009'])
                    ->where('stts', '!=', 'Batal')
                    ->whereHas('dokter', function ($query) {
                        $query->whereIn('kd_sps', ['S0001', 'S0003']);
                    })
                    ->where('tgl_registrasi',  $tanggal->now()->toDateString());
            }
        }

        return DataTables::of($data)
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !is_null($request->get('search')['value'])) {
                    return $query->whereHas('pasien', function ($query) use ($request) {
                        $query->where('nm_pasien', 'like', '%' . $request->get('search')['value'] . '%');
                    });
                }
            })
            ->editColumn('kd_sps', function ($data) {
                return $data->dokter->kd_sps;
            })
            ->editColumn('tgl_registrasi', function ($data) {
                return Carbon::parse($data->tgl_registrasi)->translatedFormat('d F Y');
            })
            ->editColumn('nm_pasien', function ($data) {
                return $data->pasien->nm_pasien . " ( No. RM " . $data->no_rkm_medis . ")";
            })
            ->editColumn('tgl_lahir', function ($data) {
                return Carbon::parse($data->pasien->tgl_lahir)->translatedFormat('d F Y');
            })
            ->editColumn('alamat', function ($data) {
                return $data->pasien->alamat . ", "
                    . $data->pasien->kelurahan->nm_kel . ", "
                    . $data->pasien->kecamatan->nm_kec . ", "
                    . $data->pasien->kabupaten->nm_kab;
            })
            ->editColumn('no_tlp', function ($data) {
                return $data->pasien->no_tlp;
            })
            ->editColumn('nm_dokter', function ($data) {
                return $data->dokter->nm_dokter;
            })
            ->make(true);
    }


    public function viewLaporanBpjs()
    {
        $tanggal = new Carbon('this month');
        return view(
            'dashboard.content.ralan.laporan_kunjungan_ralan',
            [
                'title' => 'Kunjungan Rawat Jalan',
                'bigTitle' => 'Kunjungan Rawat Jalan',
                'month' => Carbon::now()->monthName,
                'tglAwal' => $tanggal->startOfMonth()->toDateString(),
                'tglSekarang' => $tanggal->now()->toDateString(),
            ]
        );
    }

    public function jsonLaporanBpjs(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');

        if ($request->ajax()) {
            if ($request->tgl_pertama && $request->tgl_kedua) {
                $data = RegPeriksa::select('no_rawat', 'tgl_registrasi', 'kd_dokter', 'no_rkm_medis')
                    ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->where('status_lanjut', 'Ralan')
                    ->whereHas('penjab', function ($query) {
                        $query->where('png_jawab', 'like', '%bpjs%');
                    })
                    ->whereHas('diagnosaPasien', function ($query) {
                        $query->where('prioritas', 1);
                    })
                    ->whereHas('dokter.spesialis', function ($query) use ($request) {
                        $query->where('nm_sps', 'like', '%' . $request->poli . '%');
                    })
                    ->groupBy('no_rawat');
            } else {
                $data = RegPeriksa::select('no_rawat', 'tgl_registrasi', 'kd_dokter', 'no_rkm_medis')
                    ->whereBetween('tgl_registrasi', [$tanggal->startOfMonth()->toDateString(), $tanggal->lastOfMonth()->toDateString()])
                    ->where('status_lanjut', 'Ralan')
                    ->whereHas('penjab', function ($query) {
                        $query->where('png_jawab', 'like', '%bpjs%');
                    })
                    ->whereHas('diagnosaPasien', function ($query) {
                        $query->where('prioritas', 1);
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
            ->editColumn('diagnosa', function ($data) {
                return $data->diagnosaPasien->kd_penyakit;
            })
            ->make(true);
    }
}
