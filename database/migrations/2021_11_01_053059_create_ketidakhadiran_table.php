<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetidakhadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketidakhadiran', function (Blueprint $table) {
            $table->date('tgl');
            $table->integer('id')->index('id');
            $table->enum('jns', ['A', 'S', 'C', 'I']);
            $table->string('ktg', 40)->index('ktg');
            $table->integer('jml')->nullable()->index('jml');

            $table->primary(['tgl', 'id', 'jns']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ketidakhadiran');
    }
}
