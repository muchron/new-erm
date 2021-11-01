<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaketOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket_operasi', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'paket_operasi_ibfk_1')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket_operasi', function (Blueprint $table) {
            $table->dropForeign('paket_operasi_ibfk_1');
        });
    }
}
