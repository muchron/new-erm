<?php

use App\Http\Controllers\OperasiController;
use App\Models\Operasi;
use Illuminate\Support\Facades\Route;

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

Route::get('/operasi', [OperasiController::class, 'index']);
Route::get('/operasi/json', [OperasiController::class, 'json']);

Route::get('/test', function () {
    $data = Operasi::all();
    foreach ($data as $data) {
        dd(
            // $data->dokter->nama . " <br>" .
            // $data->dokterAnestesi->nama . " <br>" .
            $data->pembiayaan->png_jawab
        );
    }
});
