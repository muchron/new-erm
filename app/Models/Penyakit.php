<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = "penyakit";

    public function diagnosaPenyakit()
    {
        return $this->hasMany(DiagnosaPasien::class, 'kd_penyakit', 'kd_penyakit');
    }
}
