<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persalinan extends Model
{
    use HasFactory;
    protected $table = 'rawat_inap_drpr';

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'kd_dokter', 'kd_dokter');
    }

    public function regPeriksa()
    {
        return $this->belongsTo(RegPeriksa::class, 'no_rawat', 'no_rawat');
    }

    public function rawatInap()
    {
        return $this->belongsTo(RawatInap::class, 'kd_jenis_prw', 'kd_jenis_prw');
    }

    public function pembiayaan()
    {
        return $this->hasOneThrough(
            Penjab::class,
            RegPeriksa::class,
            'no_rawat',
            'kd_pj',
            'no_rawat',
            'kd_pj',
        );
    }
}
