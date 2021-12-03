<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RegPeriksa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RanapController extends Controller
{
    public function index()
    {
        $tanggal = new Carbon('this month');
        return view(
            'dashboard.content.ranap.list_kunjungan_ranap',
            [
                'title' => 'Kunjungan Rawat Inap',
                'bigTitle' => 'Kunjungan Rawat Inap',
                'month' => $tanggal->now()->monthName,
                'tglAwal' => $tanggal->startOfMonth()->toDateString(),
                'tglSekarang' => $tanggal->now()->toDateString(),
            ]
        );
    }

    public function jsonRanap()
    {
        $tanggal = new Carbon('this month');

        $data = RegPeriksa::whereIn('tgl_registrasi',  [$tanggal->startOfMonth()->toDateString(), $tanggal->now()->toDateString()])
            ->whereHas('penjab', function ($query) {
                $query->where('png_jawab', 'like', '%bpjs%');
            })
            ->whereHas('kamarInap', function ($query) {
                $query->where('stts_pulang', '!=', 'pindah kamar');
            })
            ->whereHas('diagnosaPenyakit', function ($query) {
                $query->select('kd_penyakit');
            })
            ->whereHas('dokter', function ($query) {
                $query->whereIn('kd_sps', ['S0001', 'S0003']);
            })->get();

        return json_encode($data);
        // return DataTables::of($data)
        //     ->editColumn('tgl_registrasi', function ($data) use ($tanggal) {
        //         return $tanggal->parse($data->tgl_registrasi)->translatedFormat('d F Y');
        //     })
        //     ->editColumn('no_ktp', function ($data) {
        //         return $data->pasien->no_ktp;
        //     })
        //     ->editColumn('nm_pasien', function ($data) {
        //         return $data->pasien->nm_pasien;
        //     })
        //     ->editColumn('no_peserta', function ($data) {
        //         return $data->pasien->no_peserta;
        //     })
        //     ->editColumn('no_tlp', function ($data) {
        //         return $data->pasien->no_tlp;
        //     })
        //     ->editColumn('alamat', function ($data) {
        //         return $data->pasien->alamat . ", "
        //             . $data->pasien->kelurahan->nm_kel . ", "
        //             . $data->pasien->kecamatan->nm_kec . ", "
        //             . $data->pasien->kabupaten->nm_kab;
        //     })
        //     ->editColumn('nm_dokter', function ($data) {
        //         return $data->dokter->nm_dokter;
        //     })
        //     ->editColumn('nm_sps', function ($data) {
        //         return $data->dokter->spesialis->nm_sps;
        //     })
        //     ->editColumn('diagnosa', function ($data) {
        //         dd($data->diagnosaPasien->kd_penyakit);
        //     })
        //     ->make(true);
    }
}
