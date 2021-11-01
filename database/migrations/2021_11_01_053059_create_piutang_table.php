<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piutang', function (Blueprint $table) {
            $table->string('nota_piutang', 20)->primary();
            $table->date('tgl_piutang')->nullable();
            $table->char('nip', 20)->nullable()->index('nip');
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
            $table->string('nm_pasien', 50)->nullable();
            $table->string('catatan', 40)->nullable();
            $table->enum('jns_jual', ['Jual Bebas', 'Karyawan', 'Beli Luar', 'Rawat Jalan', 'Kelas 1', 'Kelas 2', 'Kelas 3', 'Utama', 'VIP', 'VVIP'])->nullable();
            $table->double('ongkir')->nullable();
            $table->double('uangmuka')->nullable();
            $table->double('sisapiutang');
            $table->enum('status', ['UMUM', 'PAJAK'])->nullable();
            $table->date('tgltempo');
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piutang');
    }
}
