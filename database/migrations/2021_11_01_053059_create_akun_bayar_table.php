<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunBayarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_bayar', function (Blueprint $table) {
            $table->string('nama_bayar', 50)->primary();
            $table->string('kd_rek', 15)->nullable()->index('akun_bayar_ibfk_1');
            $table->double('ppn')->nullable()->index('ppn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_bayar');
    }
}
