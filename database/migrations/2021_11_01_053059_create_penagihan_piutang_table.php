<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenagihanPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penagihan_piutang', function (Blueprint $table) {
            $table->string('no_tagihan', 17)->primary();
            $table->date('tanggal');
            $table->date('tanggaltempo');
            $table->integer('tempo');
            $table->string('nip', 20)->index('penagihan_piutang_ibfk_1');
            $table->string('nip_menyetujui', 20)->index('nip_menyetujui');
            $table->string('kd_pj', 3)->index('kd_pj');
            $table->string('catatan', 100);
            $table->string('kd_rek', 15)->index('kd_rek');
            $table->enum('status', ['Proses Penagihan', 'Sudah Dibayar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penagihan_piutang');
    }
}
