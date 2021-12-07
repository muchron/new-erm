<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienBayi extends Model
{
    use HasFactory;
    protected $table = 'pasien_bayi';

    public function pasienBayi()
    {
        return $this->hasOne(Pasien::class, 'no_rkm_medis', 'no_rkm_medis');
    }
}
