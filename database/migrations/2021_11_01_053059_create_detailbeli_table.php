<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailbeli', function (Blueprint $table) {
            $table->string('no_faktur', 20)->index('no_faktur');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('jumlah')->nullable()->index('jumlah');
            $table->double('h_beli')->nullable()->index('h_beli');
            $table->double('subtotal')->nullable()->index('subtotal');
            $table->double('dis')->index('dis');
            $table->double('besardis')->index('besardis');
            $table->double('total')->index('total');
            $table->string('no_batch', 20);
            $table->double('jumlah2')->nullable()->index('jumlah2');
            $table->date('kadaluarsa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailbeli');
    }
}
