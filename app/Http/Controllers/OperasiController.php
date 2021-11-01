<?php

namespace App\Http\Controllers;

use App\Models\Operasi;
use Illuminate\Http\Request;

class OperasiController extends Controller
{
    public function index()
    {
        $data = Operasi::all();
        return view('dashboard.content.operasi.list_operasi', [
            'data' => $data,
            'title' => 'Data Operasi',
        ]);
    }
    public function json()
    {
        $data = Operasi::all();
        return json_encode($data);
    }
}
