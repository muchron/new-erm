<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->integer('id');
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'SMK', 'D I', 'D II', 'D III', 'D IV', 'S1', 'S2', 'S3', 'Post Doctor']);
            $table->string('sekolah', 50);
            $table->string('jurusan', 40);
            $table->year('thn_lulus');
            $table->string('kepala', 50);
            $table->enum('pendanaan', ['Biaya Sendiri', 'Biaya Instansi Sendiri', 'Lembaga Swasta Kerjasama', 'Lembaga Swasta Kompetisi', 'Lembaga Pemerintah Kerjasama', 'Lembaga Pemerintah Kompetisi', 'Lembaga Internasional']);
            $table->string('keterangan', 50);
            $table->string('status', 40);
            $table->string('berkas', 500);

            $table->primary(['id', 'pendidikan', 'sekolah']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pendidikan');
    }
}
