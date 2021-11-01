<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_batch', function (Blueprint $table) {
            $table->string('no_batch', 20);
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->date('tgl_beli');
            $table->date('tgl_kadaluarsa');
            $table->enum('asal', ['Penerimaan', 'Pengadaan', 'Hibah']);
            $table->string('no_faktur', 20);
            $table->double('dasar');
            $table->double('h_beli')->nullable();
            $table->double('ralan')->nullable();
            $table->double('kelas1')->nullable();
            $table->double('kelas2')->nullable();
            $table->double('kelas3')->nullable();
            $table->double('utama')->nullable();
            $table->double('vip')->nullable();
            $table->double('vvip')->nullable();
            $table->double('beliluar')->nullable();
            $table->double('jualbebas')->nullable();
            $table->double('karyawan')->nullable();
            $table->double('jumlahbeli');
            $table->double('sisa');

            $table->primary(['no_batch', 'kode_brng', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_batch');
    }
}
