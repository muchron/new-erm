<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPersonalPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_pasien', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'personal_pasien_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_pasien', function (Blueprint $table) {
            $table->dropForeign('personal_pasien_ibfk_1');
        });
    }
}
