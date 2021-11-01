<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsreturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrsreturbeli', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'ipsrsreturbeli_ibfk_1')->references(['kode_suplier'])->on('ipsrssuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'ipsrsreturbeli_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrsreturbeli', function (Blueprint $table) {
            $table->dropForeign('ipsrsreturbeli_ibfk_1');
            $table->dropForeign('ipsrsreturbeli_ibfk_2');
        });
    }
}
