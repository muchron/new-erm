<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('returjual', function (Blueprint $table) {
            $table->foreign(['nip'], 'returjual_ibfk_6')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rkm_medis'], 'returjual_ibfk_7')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'returjual_ibfk_8')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('returjual', function (Blueprint $table) {
            $table->dropForeign('returjual_ibfk_6');
            $table->dropForeign('returjual_ibfk_7');
            $table->dropForeign('returjual_ibfk_8');
        });
    }
}
