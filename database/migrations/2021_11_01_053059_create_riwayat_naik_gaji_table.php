<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatNaikGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_naik_gaji', function (Blueprint $table) {
            $table->integer('id');
            $table->string('pangkatjabatan', 50);
            $table->double('gapok');
            $table->date('tmt_berkala');
            $table->date('tmt_berkala_yad');
            $table->string('no_sk', 25);
            $table->date('tgl_sk');
            $table->integer('masa_kerja');
            $table->integer('bulan_kerja');
            $table->string('berkas', 500);

            $table->primary(['id', 'pangkatjabatan', 'gapok']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_naik_gaji');
    }
}
