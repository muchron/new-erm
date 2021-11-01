<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPemisahanKomponenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_pemisahan_komponen', function (Blueprint $table) {
            $table->foreign(['no_donor'], 'utd_pemisahan_komponen_ibfk_1')->references(['no_donor'])->on('utd_donor')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'utd_pemisahan_komponen_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_pemisahan_komponen', function (Blueprint $table) {
            $table->dropForeign('utd_pemisahan_komponen_ibfk_1');
            $table->dropForeign('utd_pemisahan_komponen_ibfk_2');
        });
    }
}
