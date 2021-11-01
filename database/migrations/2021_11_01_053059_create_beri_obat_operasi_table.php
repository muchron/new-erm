<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeriObatOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beri_obat_operasi', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->dateTime('tanggal')->index('tanggal');
            $table->string('kd_obat', 15)->index('kd_obat');
            $table->double('hargasatuan')->index('hargasatuan');
            $table->double('jumlah')->index('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beri_obat_operasi');
    }
}
