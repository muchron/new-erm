<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdCekalDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_cekal_darah', function (Blueprint $table) {
            $table->foreign(['no_donor'], 'utd_cekal_darah_ibfk_1')->references(['no_donor'])->on('utd_donor')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['petugas_pemusnahan'], 'utd_cekal_darah_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_cekal_darah', function (Blueprint $table) {
            $table->dropForeign('utd_cekal_darah_ibfk_1');
            $table->dropForeign('utd_cekal_darah_ibfk_2');
        });
    }
}
