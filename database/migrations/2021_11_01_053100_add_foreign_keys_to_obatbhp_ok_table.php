<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToObatbhpOkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obatbhp_ok', function (Blueprint $table) {
            $table->foreign(['kode_sat'], 'obatbhp_ok_ibfk_1')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obatbhp_ok', function (Blueprint $table) {
            $table->dropForeign('obatbhp_ok_ibfk_1');
        });
    }
}
