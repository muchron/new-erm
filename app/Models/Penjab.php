<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjab extends Model
{
    use HasFactory;
    protected $table = "penjab";
    // protected $primaryKey = "kd_pj";

    function regPeriksa()
    {
        return $this->hasMany(RegPeriksa::class, 'kd_pj', 'kd_pj');
    }
}
