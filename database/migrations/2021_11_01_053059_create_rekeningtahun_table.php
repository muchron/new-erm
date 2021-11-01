<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningtahunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekeningtahun', function (Blueprint $table) {
            $table->year('thn');
            $table->string('kd_rek', 15)->default('')->index('kd_rek');
            $table->double('saldo_awal')->index('saldo_awal');

            $table->primary(['thn', 'kd_rek']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekeningtahun');
    }
}
