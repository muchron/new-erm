<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_jabatan', function (Blueprint $table) {
            $table->integer('id');
            $table->string('jabatan', 50)->index('jnj_jabatan');
            $table->date('tmt_pangkat');
            $table->date('tmt_pangkat_yad');
            $table->string('pejabat_penetap', 50);
            $table->string('nomor_sk', 25);
            $table->date('tgl_sk');
            $table->string('dasar_peraturan', 50);
            $table->integer('masa_kerja');
            $table->integer('bln_kerja');
            $table->string('berkas', 500);

            $table->primary(['id', 'jabatan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_jabatan');
    }
}
