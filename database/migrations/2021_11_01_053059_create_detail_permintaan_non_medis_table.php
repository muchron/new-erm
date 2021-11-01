<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPermintaanNonMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_permintaan_non_medis', function (Blueprint $table) {
            $table->string('no_permintaan', 20)->nullable()->index('no_permintaan');
            $table->string('kode_brng', 15)->nullable()->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('jumlah')->nullable();
            $table->string('keterangan', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_permintaan_non_medis');
    }
}
