<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('returbeli', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'returbeli_ibfk_2')->references(['kode_suplier'])->on('datasuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'returbeli_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'returbeli_ibfk_4')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('returbeli', function (Blueprint $table) {
            $table->dropForeign('returbeli_ibfk_2');
            $table->dropForeign('returbeli_ibfk_3');
            $table->dropForeign('returbeli_ibfk_4');
        });
    }
}
