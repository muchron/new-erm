<?php

namespace App\Models;

use App\Models\Operasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    protected $table = "dokter";

    public function operasi()
    {
        return $this->hasMany(Operasi::class);
    }
}
