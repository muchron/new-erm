<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosaPasienController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.content.rekammedis.list_diagnosa',
            [
                'title' => 'Data Rekam Medis',
                'bigTitle' => 'Rekam Medis',
            ]
        );
    }
}
