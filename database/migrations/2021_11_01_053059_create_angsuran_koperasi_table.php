<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngsuranKoperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angsuran_koperasi', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_angsur');
            $table->double('pokok')->index('pokok');
            $table->double('jasa')->index('jasa');

            $table->primary(['id', 'tanggal_pinjam', 'tanggal_angsur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('angsuran_koperasi');
    }
}
