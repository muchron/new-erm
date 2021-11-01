<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->string('no_jurnal', 20)->primary();
            $table->string('no_bukti', 20)->nullable()->index('no_bukti');
            $table->date('tgl_jurnal')->nullable()->index('tgl_jurnal');
            $table->enum('jenis', ['U', 'P'])->nullable()->index('jenis');
            $table->string('keterangan', 350)->nullable()->index('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnal');
    }
}
