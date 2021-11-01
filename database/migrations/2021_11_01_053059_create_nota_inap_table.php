<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_inap', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('')->primary();
            $table->string('no_nota', 17)->nullable()->unique('no_nota');
            $table->date('tanggal')->nullable()->index('tanggal');
            $table->time('jam')->nullable()->index('jam');
            $table->double('Uang_Muka')->nullable()->index('Uang_Muka');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_inap');
    }
}
