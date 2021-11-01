<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokopemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokopemesanan', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'tokopemesanan_ibfk_1')->references(['kode_suplier'])->on('tokosuplier')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'tokopemesanan_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokopemesanan', function (Blueprint $table) {
            $table->dropForeign('tokopemesanan_ibfk_1');
            $table->dropForeign('tokopemesanan_ibfk_2');
        });
    }
}
