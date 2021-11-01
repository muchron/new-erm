<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangsalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangsal', function (Blueprint $table) {
            $table->char('kd_bangsal', 5)->primary();
            $table->string('nm_bangsal', 30)->nullable()->index('nm_bangsal');
            $table->enum('status', ['0', '1'])->nullable()->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bangsal');
    }
}
