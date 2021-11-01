<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampreturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampreturbeli', function (Blueprint $table) {
            $table->string('no_faktur', 20)->default('')->index('no_faktur');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->string('nama_brng', 100)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->double('h_beli')->nullable();
            $table->double('jml_beli')->nullable();
            $table->double('h_retur')->nullable();
            $table->double('jml_retur')->nullable();
            $table->double('total')->nullable();
            $table->string('no_batch', 20);
            $table->double('jml_retur2')->nullable();
            $table->string('kadaluarsa', 14);
            $table->string('petugas', 20);

            $table->primary(['no_faktur', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tampreturbeli');
    }
}
