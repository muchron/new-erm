<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opname', function (Blueprint $table) {
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->double('h_beli')->nullable();
            $table->date('tanggal');
            $table->double('stok')->index('stok');
            $table->double('real')->index('real');
            $table->double('selisih')->index('selisih');
            $table->double('nomihilang')->index('nomihilang');
            $table->double('lebih');
            $table->double('nomilebih');
            $table->string('keterangan', 60)->index('keterangan');
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['kode_brng', 'tanggal', 'kd_bangsal', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opname');
    }
}
