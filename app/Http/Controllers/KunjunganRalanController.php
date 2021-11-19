<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RegPeriksa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KunjunganRalanController extends Controller
{
    public function index()
    {
        $tanggal = new Carbon('this month');
        return view(
            'dashboard.content.kunjungan.list_statuskunjungan',
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
            if (!empty($request->tgl_pertama) && !empty($request->tgl_kedua)) {
                $data = RegPeriksa::where('stts_daftar', 'like', '%' . $request->status . '%')
                    ->where('stts', '!=', 'Batal')
                    ->whereIn('kd_poli', ['P001', 'P003', 'P008', 'P007', 'P009'])
                    ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->whereHas('dokter', function ($query) use ($request) {
                        $query->where('kd_sps', 'like', $request->poli);
                    })
                    ->whereHas('dokter', function ($query) use ($request) {
                        $query->where('kd_dokter', 'like', '%' . $request->kd_dokter . '%');
                    });
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
}
