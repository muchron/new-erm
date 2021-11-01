<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returjual', function (Blueprint $table) {
            $table->string('no_retur_jual', 20)->primary();
            $table->date('tgl_retur')->nullable()->index('tgl_retur');
            $table->char('nip', 20)->nullable()->index('nip');
            $table->string('no_rkm_medis', 15)->index('no_rkm_medis');
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returjual');
    }
}
