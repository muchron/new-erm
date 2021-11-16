<?php

use App\Models\Operasi;
use App\Models\DiagnosaPasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperasiController;
use App\Http\Controllers\LaporanIGDController;
use App\Http\Controllers\DiagnosaPasienController;
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

Route::get('/rekammedis', [DiagnosaPasienController::class, 'index']);
Route::get('/rekammedis/json', [DiagnosaPasienController::class, 'json']);

Route::get('/rekammedis/dinkes', [LaporanDiagnosaDinkesController::class, 'index']);
Route::get('/rekammedis/dinkes/json', [LaporanDiagnosaDinkesController::class, 'json']);

Route::get('/rekammedis/penyakit', [LaporanDiagnosaPenyakitController::class, 'index']);
Route::get('/rekammedis/penyakit/json', [LaporanDiagnosaPenyakitController::class, 'json']);

Route::get('/igd', [LaporanIGDController::class, 'index']);
Route::get('/igd/json', [LaporanIGDController::class, 'json']);


Route::get('/test', function () {
    $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
        ->where('prioritas', 1)
        ->with('regPeriksa.dokter.spesialis')
        ->where('status', 'ralan')
        ->whereIn('kd_penyakit', ['J06.9', 'A09.9', 'J18.0'])
        ->whereHas('regPeriksa', function ($query) {
            $query->whereBetween('tgl_registrasi', ['2021-01-01', '2021-01-31']);
        })
        ->whereHas('regPeriksa.dokter.spesialis', function ($query) {
            $query->where('nm_sps', 'like', '%anak%');
        })
        ->groupBy('kd_penyakit')
        ->orderBy('jumlah', 'desc')
        ->limit(10)
        ->get();
    return json_encode($data);
});
