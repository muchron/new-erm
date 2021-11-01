<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokopenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokopenjualan', function (Blueprint $table) {
            $table->string('nota_jual', 15)->primary();
            $table->date('tgl_jual')->nullable();
            $table->char('nip', 20)->nullable()->index('nip');
            $table->string('no_member', 10)->nullable()->index('no_member');
            $table->string('nm_member', 50)->nullable();
            $table->string('keterangan', 40)->nullable();
            $table->enum('jns_jual', ['Distributor', 'Grosir', 'Retail'])->nullable();
            $table->double('ongkir')->nullable();
            $table->double('ppn');
            $table->string('kd_rek', 15)->nullable()->index('kd_rek');
            $table->double('total');
            $table->string('nama_bayar', 50)->index('nama_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokopenjualan');
    }
}
