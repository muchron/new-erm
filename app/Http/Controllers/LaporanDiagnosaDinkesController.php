<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanDiagnosaDinkesController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.content.rekammedis.list_diagnosa_dinkes',
            [
                'bigTitle' => 'Laporan Diagnosa Dinkes',
                'title' => 'Laporan Diagnosa Dinkes'
            ]
        );
    }
}
