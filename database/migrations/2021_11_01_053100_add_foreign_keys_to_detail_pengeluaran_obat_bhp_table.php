<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPengeluaranObatBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pengeluaran_obat_bhp', function (Blueprint $table) {
            $table->foreign(['no_keluar'], 'detail_pengeluaran_obat_bhp_ibfk_1')->references(['no_keluar'])->on('pengeluaran_obat_bhp')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detail_pengeluaran_obat_bhp_ibfk_2')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'detail_pengeluaran_obat_bhp_ibfk_3')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pengeluaran_obat_bhp', function (Blueprint $table) {
            $table->dropForeign('detail_pengeluaran_obat_bhp_ibfk_1');
            $table->dropForeign('detail_pengeluaran_obat_bhp_ibfk_2');
            $table->dropForeign('detail_pengeluaran_obat_bhp_ibfk_3');
        });
    }
}
