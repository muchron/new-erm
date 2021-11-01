<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetJamMinimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_jam_minimal', function (Blueprint $table) {
            $table->integer('lamajam');
            $table->enum('hariawal', ['Yes', 'No']);
            $table->double('feeperujuk');
            $table->enum('diagnosaakhir', ['Yes', 'No'])->nullable();
            $table->integer('bayi')->nullable();
            $table->enum('aktifkan_hapus_data_salah', ['Yes', 'No'])->nullable();
            $table->enum('kamar_inap_kasir_ralan', ['Yes', 'No'])->nullable();
            $table->enum('ubah_status_kamar', ['Yes', 'No']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_jam_minimal');
    }
}
