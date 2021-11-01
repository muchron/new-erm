<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_dokter', function (Blueprint $table) {
            $table->string('no_resep', 14)->nullable()->index('no_resep');
            $table->string('kode_brng', 15)->nullable()->index('kode_brng');
            $table->double('jml')->nullable();
            $table->string('aturan_pakai', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_dokter');
    }
}
