<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdDetailPemisahanKomponenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_detail_pemisahan_komponen', function (Blueprint $table) {
            $table->string('no_donor', 15)->nullable()->index('no_donor');
            $table->string('no_kantong', 15)->primary();
            $table->string('kode_komponen', 5)->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_detail_pemisahan_komponen');
    }
}
