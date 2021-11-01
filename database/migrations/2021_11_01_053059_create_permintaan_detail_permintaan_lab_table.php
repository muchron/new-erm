<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanDetailPermintaanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_detail_permintaan_lab', function (Blueprint $table) {
            $table->string('noorder', 15);
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->integer('id_template')->index('id_template');
            $table->enum('stts_bayar', ['Sudah', 'Belum'])->nullable();

            $table->primary(['noorder', 'kd_jenis_prw', 'id_template']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_detail_permintaan_lab');
    }
}
