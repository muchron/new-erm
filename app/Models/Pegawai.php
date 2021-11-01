<?php

namespace App\Models;

use App\Models\Operasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";

    public function pegawai()
    {
        return $this->hasMany(Operasi::class);
    }
}
