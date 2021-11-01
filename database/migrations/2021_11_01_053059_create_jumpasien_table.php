<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumpasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumpasien', function (Blueprint $table) {
            $table->year('thn');
            $table->integer('bln');
            $table->integer('id')->index('id');
            $table->integer('jml')->index('jml');

            $table->primary(['thn', 'bln', 'id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jumpasien');
    }
}
