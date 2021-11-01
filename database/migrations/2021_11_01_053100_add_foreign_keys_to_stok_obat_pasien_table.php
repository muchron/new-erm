<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStokObatPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stok_obat_pasien', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'stok_obat_pasien_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'stok_obat_pasien_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE');
            $table->foreign(['no_rawat'], 'stok_obat_pasien_ibfk_4')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stok_obat_pasien', function (Blueprint $table) {
            $table->dropForeign('stok_obat_pasien_ibfk_2');
            $table->dropForeign('stok_obat_pasien_ibfk_3');
            $table->dropForeign('stok_obat_pasien_ibfk_4');
        });
    }
}
