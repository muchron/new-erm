<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdPemisahanKomponenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_pemisahan_komponen', function (Blueprint $table) {
            $table->string('no_donor', 15)->primary();
            $table->date('tanggal')->nullable();
            $table->enum('dinas', ['Pagi', 'Siang', 'Sore', 'Malam'])->nullable();
            $table->string('nip', 20)->nullable()->index('nip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_pemisahan_komponen');
    }
}
