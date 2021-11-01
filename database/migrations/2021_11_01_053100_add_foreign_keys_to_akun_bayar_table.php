<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAkunBayarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akun_bayar', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'akun_bayar_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('akun_bayar', function (Blueprint $table) {
            $table->dropForeign('akun_bayar_ibfk_1');
        });
    }
}
