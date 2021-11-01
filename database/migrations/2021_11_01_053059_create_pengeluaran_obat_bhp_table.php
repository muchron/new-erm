<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranObatBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran_obat_bhp', function (Blueprint $table) {
            $table->string('no_keluar', 15)->primary();
            $table->date('tanggal')->index('tanggal');
            $table->string('nip', 20)->index('nip');
            $table->string('keterangan', 200)->index('keterangan');
            $table->char('kd_bangsal', 5)->nullable()->index('kd_bangsal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluaran_obat_bhp');
    }
}
