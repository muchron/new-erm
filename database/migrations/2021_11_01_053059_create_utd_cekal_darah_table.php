<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdCekalDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_cekal_darah', function (Blueprint $table) {
            $table->string('no_donor', 15)->primary();
            $table->date('tanggal')->nullable();
            $table->enum('dinas', ['Pagi', 'Siang', 'Sore', 'Malam'])->nullable();
            $table->string('petugas_pemusnahan', 20)->nullable()->index('petugas_pemusnahan');
            $table->string('keterangan', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_cekal_darah');
    }
}
