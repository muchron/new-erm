<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClosingKasirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closing_kasir', function (Blueprint $table) {
            $table->enum('shift', ['Pagi', 'Siang', 'Sore', 'Malam'])->primary();
            $table->time('jam_masuk')->index('jam_masuk');
            $table->time('jam_pulang')->index('jam_pulang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('closing_kasir');
    }
}
