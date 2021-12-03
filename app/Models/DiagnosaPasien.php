<?php

namespace App\Models;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Penyakit;
use App\Models\RegPeriksa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiagnosaPasien extends Model
{
    use HasFactory;
    protected $table = "diagnosa_pasien";

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'kd_penyakit', 'kd_penyakit');
    }
    public function regPeriksa()
    {
        return $this->hasMany(RegPeriksa::class, 'no_rawat', 'no_rawat');
    }
}
