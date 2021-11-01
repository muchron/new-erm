<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_seminar', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->enum('tingkat', ['Local', 'Regional', 'Nasional', 'Internasional']);
            $table->enum('jenis', ['WORKSHOP', 'SIMPOSIUM', 'SEMINAR', 'FGD', 'PELATIHAN', 'LAINNYA']);
            $table->string('nama_seminar', 50);
            $table->string('peranan', 40);
            $table->date('mulai');
            $table->date('selesai');
            $table->string('penyelengara', 50);
            $table->string('tempat', 50);
            $table->string('berkas', 500);

            $table->primary(['id', 'nama_seminar', 'mulai']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_seminar');
    }
}
