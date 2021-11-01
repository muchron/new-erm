<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran_harian', function (Blueprint $table) {
            $table->dateTime('tanggal')->default('0000-00-00 00:00:00');
            $table->string('kode_kategori', 5)->nullable()->index('pengeluaran_harian_ibfk_2');
            $table->double('biaya');
            $table->string('nip', 20)->nullable()->index('nip');
            $table->string('keterangan', 50)->default('');

            $table->primary(['tanggal', 'keterangan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluaran_harian');
    }
}
