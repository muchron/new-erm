<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbilDankesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambil_dankes', function (Blueprint $table) {
            $table->integer('id');
            $table->date('tanggal');
            $table->string('ktg', 50)->index('ktg');
            $table->double('dankes')->index('dankes');

            $table->primary(['id', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambil_dankes');
    }
}
