<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAturanPakaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aturan_pakai', function (Blueprint $table) {
            $table->date('tgl_perawatan')->default('0000-00-00');
            $table->time('jam')->default('00:00:00');
            $table->string('no_rawat', 17)->default('')->index('no_rawat');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->string('aturan', 150)->nullable();

            $table->primary(['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aturan_pakai');
    }
}
