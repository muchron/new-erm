<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliklinikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poliklinik', function (Blueprint $table) {
            $table->char('kd_poli', 5)->default('')->primary();
            $table->string('nm_poli', 50)->nullable()->index('nm_poli');
            $table->double('registrasi')->index('registrasi');
            $table->double('registrasilama')->index('registrasilama');
            $table->enum('status', ['0', '1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poliklinik');
    }
}
