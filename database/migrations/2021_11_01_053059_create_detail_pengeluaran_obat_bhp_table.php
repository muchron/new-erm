<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengeluaranObatBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengeluaran_obat_bhp', function (Blueprint $table) {
            $table->string('no_keluar', 15)->index('no_keluar');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->string('no_batch', 20)->nullable();
            $table->double('jumlah')->index('jumlah');
            $table->double('harga_beli')->index('harga_beli');
            $table->double('total')->index('total');
            $table->string('no_faktur', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pengeluaran_obat_bhp');
    }
}
