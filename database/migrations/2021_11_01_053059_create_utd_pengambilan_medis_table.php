<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdPengambilanMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_pengambilan_medis', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->double('jml')->nullable()->index('jml');
            $table->double('hargabeli')->nullable()->index('hargabeli');
            $table->double('total')->nullable()->index('total');
            $table->char('kd_bangsal_dr', 5)->default('')->index('kd_bangsal_dr');
            $table->dateTime('tanggal')->default('0000-00-00 00:00:00');
            $table->string('keterangan', 60)->nullable();
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['kode_brng', 'tanggal', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_pengambilan_medis');
    }
}
