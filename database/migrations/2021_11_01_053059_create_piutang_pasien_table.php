<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiutangPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piutang_pasien', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->date('tgl_piutang')->nullable();
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
            $table->enum('status', ['Lunas', 'Belum Lunas']);
            $table->double('totalpiutang')->nullable();
            $table->double('uangmuka')->nullable();
            $table->double('sisapiutang');
            $table->date('tgltempo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piutang_pasien');
    }
}
