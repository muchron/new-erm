<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailjurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailjurnal', function (Blueprint $table) {
            $table->string('no_jurnal', 20)->nullable()->index('no_jurnal');
            $table->string('kd_rek', 15)->nullable()->index('kd_rek');
            $table->double('debet')->nullable()->index('debet');
            $table->double('kredit')->nullable()->index('kredit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailjurnal');
    }
}
