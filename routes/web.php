<?php

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Operasi;
use App\Models\Persalinan;
use App\Models\RegPeriksa;
use App\Models\DiagnosaPasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RalanController;
use App\Http\Controllers\RanapController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\OperasiController;
use App\Http\Controllers\LaporanIGDController;
use App\Http\Controllers\PersalinanController;
use App\Http\Controllers\DiagnosaPasienController;
use App\Http\Controllers\DiagramOperasiController;
use App\Http\Controllers\KunjunganRalanController;
use App\Http\Controllers\LaporanDiagnosaDinkesController;
use App\Http\Controllers\LaporanDiagnosaPenyakitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(
        'dashboard.content.beranda.diagram_penyakit',
        [
            'bigTitle' => 'Halaman Depan'
        ]
    );
});
Route::get('/operasi', [OperasiController::class, 'index']);
Route::get('/operasi/json', [OperasiController::class, 'json']);
Route::get('/diagram/operasi/{tahun}', [OperasiController::class, 'diagram']);

Route::get('/rekammedis', [DiagnosaPasienController::class, 'index']);
Route::get('/rekammedis/json', [DiagnosaPasienController::class, 'json']);

Route::get('/rekammedis/dinkes', [LaporanDiagnosaDinkesController::class, 'index']);
Route::get('/rekammedis/dinkes/json', [LaporanDiagnosaDinkesController::class, 'json']);

Route::get('/rekammedis/penyakit', [LaporanDiagnosaPenyakitController::class, 'index']);
Route::get('/rekammedis/penyakit/json', [LaporanDiagnosaPenyakitController::class, 'json']);

Route::get('/igd', [LaporanIGDController::class, 'index']);
Route::get('/igd/json', [LaporanIGDController::class, 'json']);

Route::get('/ralan', [RalanController::class, 'index']);
Route::get('/ralan/json', [RalanController::class, 'json']);
Route::get('/ralan/laporan', [RalanController::class, 'viewLaporanBpjs']);
Route::get('/ralan/laporan/json', [RalanController::class, 'jsonLaporanBpjs']);

Route::get('/ranap/json', [RanapController::class, 'jsonRanap']);
Route::get('/ranap/laporan', [RanapController::class, 'laporanBpjs']);
Route::get('/ranap/laporan/json', [RanapController::class, 'jsonRanap']);


Route::get('/persalinan', [PersalinanController::class, 'index']);
Route::get('/persalinan/json', [PersalinanController::class, 'json']);


Route::get('/poli/{kd_sps}', function ($kd_sps) {
    $dokter = Dokter::all()
        ->where('kd_sps',  $kd_sps)
        ->where('status', 1);
    return response()->json($dokter);
});

Route::get('/test', function () {

    $data = RegPeriksa::with('pasien', 'pasien.kelurahan', 'pasien.kecamatan', 'pasien.kabupaten', 'dokter', 'dokter.spesialis')
        ->where('status_poli', 'Baru')
        ->whereBetween('tgl_registrasi', ['2021-01-01', '2021-11-17'])
        ->wherehas('dokter', function ($query) {
            $query->whereIn('kd_sps', ['S0001', 'S0003']);
        })
        ->get();

    // foreach ($data as $data) {
    return json_encode($data);
    // }
    // return json_encode($data);
});
