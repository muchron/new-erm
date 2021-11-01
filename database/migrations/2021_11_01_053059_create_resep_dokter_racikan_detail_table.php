<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepDokterRacikanDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_dokter_racikan_detail', function (Blueprint $table) {
            $table->string('no_resep', 14);
            $table->string('no_racik', 2);
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->double('p1')->nullable();
            $table->double('p2')->nullable();
            $table->string('kandungan', 10)->nullable();
            $table->double('jml')->nullable();

            $table->primary(['no_resep', 'no_racik', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_dokter_racikan_detail');
    }
}
