<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsidenKeselamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insiden_keselamatan', function (Blueprint $table) {
            $table->string('kode_insiden', 5)->primary();
            $table->string('nama_insiden', 100);
            $table->enum('jenis_insiden', ['KPC', 'KTC', 'KNC', 'KTD', 'Sentinel']);
            $table->enum('dampak', ['1. Tidak Signifikan', '2. Minor', '3. Moderat', '4. Mayor', '5. Katastropik']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insiden_keselamatan');
    }
}
