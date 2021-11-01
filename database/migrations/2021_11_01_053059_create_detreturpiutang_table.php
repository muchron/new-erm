<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetreturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detreturpiutang', function (Blueprint $table) {
            $table->string('no_retur_piutang', 20)->index('no_retur_piutang');
            $table->string('nota_piutang', 20)->index('nota_piutang');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('jml_piutang')->nullable()->index('jml_piutang');
            $table->double('h_piutang')->nullable()->index('h_piutang');
            $table->double('jml_retur')->nullable()->index('jml_retur');
            $table->double('h_retur')->nullable()->index('h_retur');
            $table->double('subtotal')->nullable()->index('subtotal');
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
        Schema::dropIfExists('detreturpiutang');
    }
}
