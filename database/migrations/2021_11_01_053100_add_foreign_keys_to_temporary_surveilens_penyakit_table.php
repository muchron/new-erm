<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemporarySurveilensPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temporary_surveilens_penyakit', function (Blueprint $table) {
            $table->foreign(['kd_penyakit'], 'temporary_surveilens_penyakit_ibfk_1')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_penyakit2'], 'temporary_surveilens_penyakit_ibfk_2')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temporary_surveilens_penyakit', function (Blueprint $table) {
            $table->dropForeign('temporary_surveilens_penyakit_ibfk_1');
            $table->dropForeign('temporary_surveilens_penyakit_ibfk_2');
        });
    }
}
