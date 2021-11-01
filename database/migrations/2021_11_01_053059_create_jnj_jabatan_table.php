<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJnjJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jnj_jabatan', function (Blueprint $table) {
            $table->string('kode', 10)->primary();
            $table->string('nama', 50)->index('nama');
            $table->double('tnj')->index('tnj');
            $table->tinyInteger('indek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jnj_jabatan');
    }
}
