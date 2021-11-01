<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsopnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrsopname', function (Blueprint $table) {
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->double('h_beli')->nullable();
            $table->date('tanggal');
            $table->integer('stok')->index('stok');
            $table->integer('real')->index('real');
            $table->integer('selisih')->index('selisih');
            $table->double('nomihilang')->index('nomihilang');
            $table->string('keterangan', 60)->index('keterangan');

            $table->primary(['kode_brng', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrsopname');
    }
}
