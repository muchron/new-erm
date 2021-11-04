<?php

namespace App\Models;

use App\Models\Dokter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spesialis extends Model
{
    use HasFactory;
    protected $table = 'spesialis';

    public function dokter()
    {
        return $this->hashMany(Dokter::class, 'kd_sps', 'kd_sps');
    }
}
