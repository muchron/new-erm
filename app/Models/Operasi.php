<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operasi extends Model
{
    use HasFactory;
    protected $table = "operasi";


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
    public function paketOperasi()
    {
        return $this->belongsTo(PaketOperasi::class, 'kode_paket', 'kode_paket');
    }
    public function dokter()
    {
        return $this->belongsTo(Pegawai::class, 'operator1', 'nik');
    }
    public function assisten1()
    {
        return $this->belongsTo(Pegawai::class, 'asisten_operator1', 'nik');
    }
    public function assisten2()
    {
        return $this->belongsTo(Pegawai::class, 'asisten_operator2', 'nik');
    }
    public function dokterAnestesi()
    {
        return $this->belongsTo(Pegawai::class, 'dokter_anestesi', 'nik');
    }
    public function asistenAnestesi()
    {
        return $this->belongsTo(Pegawai::class, 'asisten_anestesi', 'nik');
    }
    public function dokterAnak()
    {
        return $this->belongsTo(Pegawai::class, 'dokter_pjanak', 'nik');
    }
}
