<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokopembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokopembelian', function (Blueprint $table) {
            $table->foreign(['nip'], 'tokopembelian_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_rek'], 'tokopembelian_ibfk_2')->references(['kd_rek'])->on('akun_bayar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_suplier'], 'tokopembelian_ibfk_3')->references(['kode_suplier'])->on('tokosuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokopembelian', function (Blueprint $table) {
            $table->dropForeign('tokopembelian_ibfk_1');
            $table->dropForeign('tokopembelian_ibfk_2');
            $table->dropForeign('tokopembelian_ibfk_3');
        });
    }
}
