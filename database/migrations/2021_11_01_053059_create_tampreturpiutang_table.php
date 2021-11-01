<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampreturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampreturpiutang', function (Blueprint $table) {
            $table->string('nota_piutang', 20)->default('');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->string('nama_brng', 100)->nullable();
            $table->double('jml_piutang')->nullable();
            $table->double('h_piutang')->nullable();
            $table->double('jml_retur')->nullable();
            $table->double('h_retur')->nullable();
            $table->string('satuan', 10)->nullable();
            $table->double('subtotal')->nullable();
            $table->string('no_batch', 20);
            $table->string('petugas', 20)->nullable();
            $table->string('no_faktur', 20);

            $table->primary(['nota_piutang', 'kode_brng', 'no_batch']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tampreturpiutang');
    }
}
