<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatbhpOkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obatbhp_ok', function (Blueprint $table) {
            $table->string('kd_obat', 15)->primary();
            $table->string('nm_obat', 50)->index('nm_obat');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->double('hargasatuan')->index('hargasatuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obatbhp_ok');
    }
}
