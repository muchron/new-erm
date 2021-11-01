<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetreturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detreturbeli', function (Blueprint $table) {
            $table->string('no_retur_beli', 20)->index('no_retur_beli');
            $table->string('no_faktur', 20)->index('no_faktur');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('h_beli')->nullable()->index('h_beli');
            $table->double('jml_beli')->nullable()->index('jml_beli');
            $table->double('h_retur')->nullable()->index('h_retur');
            $table->double('jml_retur')->nullable()->index('jml_retur');
            $table->double('total')->nullable()->index('total');
            $table->string('no_batch', 20);
            $table->double('jml_retur2')->nullable()->index('jml_retur2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detreturbeli');
    }
}
