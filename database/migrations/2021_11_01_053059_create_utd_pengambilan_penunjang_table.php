<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdPengambilanPenunjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_pengambilan_penunjang', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->double('jml')->nullable()->index('jml');
            $table->double('harga')->nullable();
            $table->double('total')->nullable()->index('total');
            $table->string('nip', 20)->default('')->index('nip');
            $table->dateTime('tanggal')->default('0000-00-00 00:00:00');
            $table->string('keterangan', 60)->nullable();

            $table->primary(['kode_brng', 'nip', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_pengambilan_penunjang');
    }
}
