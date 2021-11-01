<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'pemesanan_ibfk_1')->references(['kode_suplier'])->on('datasuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'pemesanan_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'pemesanan_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->dropForeign('pemesanan_ibfk_1');
            $table->dropForeign('pemesanan_ibfk_2');
            $table->dropForeign('pemesanan_ibfk_3');
        });
    }
}
