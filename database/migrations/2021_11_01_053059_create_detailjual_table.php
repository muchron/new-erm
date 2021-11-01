<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailjual', function (Blueprint $table) {
            $table->string('nota_jual', 20)->index('nota_jual');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('h_jual')->nullable()->index('h_jual');
            $table->double('h_beli')->nullable()->index('h_beli');
            $table->double('jumlah')->nullable()->index('jumlah');
            $table->double('subtotal')->nullable()->index('subtotal');
            $table->double('dis')->nullable()->index('dis');
            $table->double('bsr_dis')->nullable()->index('bsr_dis');
            $table->double('tambahan')->nullable()->index('tambahan');
            $table->double('embalase');
            $table->double('tuslah');
            $table->string('aturan_pakai', 150);
            $table->double('total')->nullable()->index('total');
            $table->string('no_batch', 20);
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
        Schema::dropIfExists('detailjual');
    }
}
