<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToParkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parkir', function (Blueprint $table) {
            $table->foreign(['nip'], 'parkir_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_parkir'], 'parkir_ibfk_2')->references(['kd_parkir'])->on('parkir_jenis')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parkir', function (Blueprint $table) {
            $table->dropForeign('parkir_ibfk_1');
            $table->dropForeign('parkir_ibfk_2');
        });
    }
}
