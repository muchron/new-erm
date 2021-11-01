<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeanggotaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keanggotaan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->char('koperasi', 5)->index('koperasi');
            $table->char('jamsostek', 5)->index('jamsostek');
            $table->char('bpjs', 5)->index('bpjs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keanggotaan');
    }
}
