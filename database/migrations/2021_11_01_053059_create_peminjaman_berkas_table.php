<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_berkas', function (Blueprint $table) {
            $table->string('peminjam', 60);
            $table->string('id_ruang', 5)->index('id_ruang');
            $table->string('no_rkm_medis', 15)->index('no_rkm_medis');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('nip', 20)->index('nip');
            $table->enum('status_pinjam', ['Masih Dipinjam', 'Sudah Kembali']);

            $table->primary(['peminjam', 'id_ruang', 'no_rkm_medis', 'tgl_pinjam', 'nip']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_berkas');
    }
}
