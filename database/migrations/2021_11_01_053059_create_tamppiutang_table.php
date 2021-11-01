<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamppiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamppiutang', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->string('nama_brng', 50)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->double('h_jual')->nullable();
            $table->double('h_beli')->nullable();
            $table->double('jumlah')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('dis')->nullable();
            $table->double('bsr_dis')->nullable();
            $table->double('total')->nullable();
            $table->string('no_batch', 20);
            $table->string('petugas', 20);
            $table->string('no_faktur', 20);
            $table->string('aturan_pakai', 150);

            $table->primary(['kode_brng', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamppiutang');
    }
}
