<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMapingObatPcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maping_obat_pcare', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'maping_obat_pcare_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maping_obat_pcare', function (Blueprint $table) {
            $table->dropForeign('maping_obat_pcare_ibfk_1');
        });
    }
}
