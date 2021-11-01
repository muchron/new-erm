<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_lain', function (Blueprint $table) {
            $table->year('thn');
            $table->integer('bln');
            $table->integer('id')->index('id');
            $table->double('bsr_jasa');
            $table->string('ktg', 40);

            $table->primary(['thn', 'bln', 'id', 'bsr_jasa', 'ktg']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa_lain');
    }
}
