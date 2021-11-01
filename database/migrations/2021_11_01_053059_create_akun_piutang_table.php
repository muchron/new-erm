<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_piutang', function (Blueprint $table) {
            $table->string('nama_bayar', 50)->primary();
            $table->string('kd_rek', 15)->nullable()->index('kd_rek');
            $table->char('kd_pj', 3)->nullable()->index('kd_pj');

            $table->unique(['kd_rek', 'kd_pj'], 'kd_rek_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_piutang');
    }
}
