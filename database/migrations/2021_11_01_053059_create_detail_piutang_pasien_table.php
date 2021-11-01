<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPiutangPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_piutang_pasien', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('nama_bayar', 50)->index('nama_bayar');
            $table->char('kd_pj', 3)->nullable()->index('kd_pj');
            $table->double('totalpiutang')->nullable();
            $table->double('sisapiutang')->nullable();
            $table->date('tgltempo')->nullable();

            $table->primary(['no_rawat', 'nama_bayar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_piutang_pasien');
    }
}
