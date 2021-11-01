<?php

namespace App\Models;

use App\Models\Operasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaketOperasi extends Model
{
    use HasFactory;
    protected $table = 'paket_operasi';

    public function operasi()
    {
        return $this->hasMany(Operasi::class, 'kd_paket', 'kd_paket');
    }
}
