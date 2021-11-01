<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSaranKesanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('saran_kesan_lab', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'saran_kesan_lab_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('saran_kesan_lab', function (Blueprint $table) {
            $table->dropForeign('saran_kesan_lab_ibfk_1');
        });
    }
}
