<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_gizi', function (Blueprint $table) {
            $table->integer('no', true);
            $table->string('temp1', 1000);
            $table->string('temp2', 1000);
            $table->string('temp3', 1000);
            $table->string('temp4', 1000);
            $table->string('temp5', 1000);
            $table->string('temp6', 1000);
            $table->string('temp7', 1000);
            $table->string('temp8', 1000);
            $table->string('temp9', 1000);
            $table->string('temp10', 1000);
            $table->string('temp11', 1000);
            $table->string('temp12', 1000);
            $table->string('temp13', 1000);
            $table->string('temp14', 1000);
            $table->string('temp15', 1000);
            $table->string('temp16', 100);
            $table->string('temp17', 100);
            $table->string('temp18', 100);
            $table->string('temp19', 100);
            $table->string('temp20', 100);
            $table->string('temp21', 100);
            $table->string('temp22', 100);
            $table->string('temp23', 100);
            $table->string('temp24', 100);
            $table->string('temp25', 100);
            $table->string('temp26', 100);
            $table->string('temp27', 100);
            $table->string('temp28', 100);
            $table->string('temp29', 100);
            $table->string('temp30', 100);
            $table->string('temp31', 100);
            $table->string('temp32', 100);
            $table->string('temp33', 100);
            $table->string('temp34', 100);
            $table->string('temp35', 100);
            $table->string('temp36', 100);
            $table->string('temp37', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary_gizi');
    }
}
