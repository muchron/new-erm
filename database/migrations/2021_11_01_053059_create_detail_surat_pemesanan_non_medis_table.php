<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSuratPemesananNonMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_surat_pemesanan_non_medis', function (Blueprint $table) {
            $table->string('no_pemesanan', 20)->index('no_pemesanan');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('jumlah')->nullable()->index('jumlah');
            $table->double('h_pesan')->nullable()->index('h_pesan');
            $table->double('subtotal')->nullable()->index('subtotal');
            $table->double('dis')->index('dis');
            $table->double('besardis')->index('besardis');
            $table->double('total')->index('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_surat_pemesanan_non_medis');
    }
}
