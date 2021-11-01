<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening', function (Blueprint $table) {
            $table->string('kd_rek', 15)->default('')->primary();
            $table->string('nm_rek', 100)->nullable()->index('nm_rek');
            $table->enum('tipe', ['N', 'M', 'R'])->nullable()->index('tipe');
            $table->enum('balance', ['D', 'K'])->nullable()->index('balance');
            $table->enum('level', ['0', '1'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekening');
    }
}
