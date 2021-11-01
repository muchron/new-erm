<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResumePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resume_pasien', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'resume_pasien_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'resume_pasien_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resume_pasien', function (Blueprint $table) {
            $table->dropForeign('resume_pasien_ibfk_1');
            $table->dropForeign('resume_pasien_ibfk_2');
        });
    }
}
