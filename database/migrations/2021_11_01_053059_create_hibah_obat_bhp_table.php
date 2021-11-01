<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHibahObatBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hibah_obat_bhp', function (Blueprint $table) {
            $table->string('no_hibah', 20)->primary();
            $table->char('kode_pemberi', 5)->nullable()->index('kode_pemberi');
            $table->string('nip', 20)->nullable()->index('nip');
            $table->date('tgl_hibah')->nullable();
            $table->double('totalhibah');
            $table->double('totalnilai');
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
        Schema::dropIfExists('hibah_obat_bhp');
    }
}
