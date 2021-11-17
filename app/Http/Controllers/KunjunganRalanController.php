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
        return view(
            'dashboard.content.kunjungan.list_statuskunjungan',
            [
                'title' => 'Kunjungan Rawat Jalan',
                'bigTitle' => 'Kunjungan Rawat Jalan',
                'month' => Carbon::now()->monthName
            ]
        );
    }

    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');

        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) && !empty($request->tgl_kedua)) {
                $data = RegPeriksa::with('pasien.kelurahan', 'pasien.kecamatan', 'pasien.kabupaten')
                    ->whereBetween('tgl_registrasi', [$request->tgl_pertama, $request->tgl_kedua])
                    ->whereHas('dokter', function ($query) use ($request) {
                        $query->where('kd_dokter', $request->dokter);
                    })
                    ->get();
            } else {
                $data = RegPeriksa::with('pasien.kelurahan', 'pasien.kecamatan', 'pasien.kabupaten')
                    ->whereIn('kd_poli', ['P001', 'P003', 'P008', 'P007', 'P009'])
                    ->whereHas('dokter', function ($query) {
                        $query->whereIn('kd_sps', ['S0001', 'S0003']);
                    })
                    ->where('tgl_registrasi', '2021-11-17')
                    ->get();
            }
        }
        // return json_encode($data);
        return DataTables::of($data)
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
