<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetreturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detreturjual', function (Blueprint $table) {
            $table->string('no_retur_jual', 20)->index('no_retur_jual');
            $table->string('nota_jual', 20)->index('nota_jual');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('jml_jual')->nullable()->index('jml_jual');
            $table->double('h_jual')->nullable()->index('h_jual');
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
        Schema::dropIfExists('detreturjual');
    }
}
