<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordAsuransiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_asuransi', function (Blueprint $table) {
            $table->char('kd_pj', 3)->primary();
            $table->string('usere', 700)->nullable();
            $table->string('passworde', 700)->nullable();

            $table->unique(['usere', 'passworde'], 'usere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_asuransi');
    }
}
