<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenagihanPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penagihan_piutang', function (Blueprint $table) {
            $table->string('no_tagihan', 17);
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->double('sisapiutang');

            $table->primary(['no_tagihan', 'no_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penagihan_piutang');
    }
}
