<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoDetailReturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_detail_returpiutang', function (Blueprint $table) {
            $table->string('no_retur_piutang', 15)->index('no_retur_piutang');
            $table->string('nota_piutang', 15);
            $table->string('kode_brng', 10)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('h_piutang')->nullable();
            $table->double('h_retur')->nullable();
            $table->double('jml_retur')->nullable();
            $table->double('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko_detail_returpiutang');
    }
}
