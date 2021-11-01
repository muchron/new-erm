<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembelian', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'pembelian_ibfk_1')->references(['kode_suplier'])->on('datasuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'pembelian_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'pembelian_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_rek'], 'pembelian_ibfk_4')->references(['kd_rek'])->on('akun_bayar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembelian', function (Blueprint $table) {
            $table->dropForeign('pembelian_ibfk_1');
            $table->dropForeign('pembelian_ibfk_2');
            $table->dropForeign('pembelian_ibfk_3');
            $table->dropForeign('pembelian_ibfk_4');
        });
    }
}
