<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPenggunaanMedisDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_penggunaan_medis_donor', function (Blueprint $table) {
            $table->foreign(['no_donor'], 'utd_penggunaan_medis_donor_ibfk_1')->references(['no_donor'])->on('utd_donor')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'utd_penggunaan_medis_donor_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_penggunaan_medis_donor', function (Blueprint $table) {
            $table->dropForeign('utd_penggunaan_medis_donor_ibfk_1');
            $table->dropForeign('utd_penggunaan_medis_donor_ibfk_2');
        });
    }
}
