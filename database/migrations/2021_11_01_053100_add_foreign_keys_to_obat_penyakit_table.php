<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToObatPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obat_penyakit', function (Blueprint $table) {
            $table->foreign(['kd_penyakit'], 'obat_penyakit_ibfk_1')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'obat_penyakit_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obat_penyakit', function (Blueprint $table) {
            $table->dropForeign('obat_penyakit_ibfk_1');
            $table->dropForeign('obat_penyakit_ibfk_2');
        });
    }
}
