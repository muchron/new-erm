<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampjurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampjurnal', function (Blueprint $table) {
            $table->char('kd_rek', 15)->primary();
            $table->string('nm_rek', 100)->nullable()->index('nm_rek');
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
        Schema::dropIfExists('tampjurnal');
    }
}
