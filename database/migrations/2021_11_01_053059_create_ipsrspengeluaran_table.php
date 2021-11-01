<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrspengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrspengeluaran', function (Blueprint $table) {
            $table->string('no_keluar', 15)->primary();
            $table->date('tanggal')->index('tanggal');
            $table->string('nip', 20)->index('nip');
            $table->string('keterangan', 100)->index('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrspengeluaran');
    }
}
