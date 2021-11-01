<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->string('nip', 20)->primary();
            $table->string('nama', 50)->nullable()->index('nama');
            $table->enum('jk', ['L', 'P'])->nullable();
            $table->string('tmp_lahir', 20)->nullable()->index('tmp_lahir');
            $table->date('tgl_lahir')->nullable()->index('tgl_lahir');
            $table->enum('gol_darah', ['A', 'B', 'O', 'AB', '-'])->nullable();
            $table->string('agama', 12)->nullable()->index('agama');
            $table->enum('stts_nikah', ['BELUM MENIKAH', 'MENIKAH', 'JANDA', 'DUDHA', 'JOMBLO'])->nullable()->index('stts_nikah');
            $table->string('alamat', 60)->nullable()->index('alamat');
            $table->char('kd_jbtn', 4)->nullable()->index('kd_jbtn');
            $table->string('no_telp', 13)->nullable();
            $table->enum('status', ['0', '1'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
