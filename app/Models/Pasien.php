<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\RegPeriksa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasien";

    public function regPeriksa()
    {
        return $this->hasMany(RegPeriksa::class, 'no_rkm_medis', 'no_rkm_medis');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kd_kel', 'kd_kel');
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kd_kec', 'kd_kec');
    }
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kd_kab', 'kd_kab');
    }
}
