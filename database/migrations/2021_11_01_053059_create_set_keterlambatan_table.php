<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetKeterlambatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_keterlambatan', function (Blueprint $table) {
            $table->integer('toleransi')->nullable();
            $table->integer('terlambat1')->nullable();
            $table->integer('terlambat2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_keterlambatan');
    }
}
