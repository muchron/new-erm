<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_penyakit', function (Blueprint $table) {
            $table->string('kd_penyakit', 10)->default('')->index('kd_penyakit');
            $table->string('kode_brng', 15)->index('kd_obat');
            $table->string('referensi', 60)->nullable();

            $table->primary(['kd_penyakit', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat_penyakit');
    }
}
