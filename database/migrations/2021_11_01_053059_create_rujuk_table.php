<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRujukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujuk', function (Blueprint $table) {
            $table->string('no_rujuk', 40);
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->string('rujuk_ke', 150)->nullable()->index('rujuk_ke');
            $table->date('tgl_rujuk')->nullable();
            $table->text('keterangan_diagnosa')->nullable();
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->enum('kat_rujuk', ['-', 'Bedah', 'Non Bedah', 'Kebidanan', 'Anak'])->nullable();
            $table->enum('ambulance', ['-', 'AGD', 'SENDIRI', 'SWASTA'])->nullable();
            $table->text('keterangan')->nullable();
            $table->time('jam')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rujuk');
    }
}
