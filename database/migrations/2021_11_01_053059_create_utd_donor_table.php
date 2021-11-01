<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_donor', function (Blueprint $table) {
            $table->string('no_donor', 15)->primary();
            $table->string('no_pendonor', 15)->index('no_pendonor');
            $table->date('tanggal')->nullable();
            $table->enum('dinas', ['Pagi', 'Siang', 'Sore', 'Malam'])->nullable();
            $table->string('tensi', 7)->nullable();
            $table->integer('no_bag')->nullable();
            $table->enum('jenis_bag', ['SB', 'DB', 'TB', 'QB'])->nullable();
            $table->enum('jenis_donor', ['DB', 'DP', 'DS'])->nullable();
            $table->enum('tempat_aftap', ['Dalam Gedung', 'Luar Gedung'])->nullable();
            $table->string('petugas_aftap', 20)->nullable()->index('petugas_aftap');
            $table->enum('hbsag', ['Negatif', 'Positif'])->nullable();
            $table->enum('hcv', ['Negatif', 'Positif'])->nullable();
            $table->enum('hiv', ['Negatif', 'Positif'])->nullable();
            $table->enum('spilis', ['Negatif', 'Positif'])->nullable();
            $table->enum('malaria', ['Negatif', 'Positif'])->nullable();
            $table->string('petugas_u_saring', 20)->nullable()->index('petugas_u_saring');
            $table->enum('status', ['Aman', 'Cekal'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_donor');
    }
}
