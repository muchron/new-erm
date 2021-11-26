<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagramOperasiController extends Controller
{
    public function index()
    {
        $label = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return json_encode($label);
    }
}
