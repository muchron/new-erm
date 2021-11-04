<?php

use App\Models\Operasi;
use App\Models\DiagnosaPasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperasiController;
use App\Http\Controllers\DiagnosaPasienController;

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
        'dashboard.layouts.main',
        [
            'bigTitle' => 'Halaman Depan'
        ]
    );
});
Route::get('/operasi', [OperasiController::class, 'index']);
Route::get('/operasi/json', [OperasiController::class, 'json']);

Route::get('/rekammedis', [DiagnosaPasienController::class, 'index']);
Route::get('/rekammedis/json', [DiagnosaPasienController::class, 'json']);


Route::get('/test', function () {
    $data = DiagnosaPasien::select('*', DB::raw('count(kd_penyakit) as jumlah'))
        ->where('prioritas', 1)
        ->with('regPeriksa.dokter.spesialis')
        ->where('status', 'ralan')
        ->whereHas('regPeriksa', function ($query) {
            $query->whereBetween('tgl_registrasi', ['2021-11-01', '2021-11-30']);
        })
        ->whereHas('regPeriksa.dokter.spesialis', function ($query) {
            $query->where('nm_sps', 'like', '%anak%');
        })
        ->groupBy('kd_penyakit')
        ->take(10)
        ->get();
    return json_encode($data);
});
