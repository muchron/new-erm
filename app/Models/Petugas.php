<?php

namespace App\Models;

use App\Models\Operasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;
    protected $table = "petugas";

    public function operasi()
    {
        return $this->hasMany(Operasi::class, 'omloop', 'nip');
    }
}
