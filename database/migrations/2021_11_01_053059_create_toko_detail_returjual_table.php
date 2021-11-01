<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoDetailReturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_detail_returjual', function (Blueprint $table) {
            $table->string('no_retur_jual', 15)->index('no_retur_jual');
            $table->string('nota_jual', 15);
            $table->string('kode_brng', 10)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('h_jual')->nullable();
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
        Schema::dropIfExists('toko_detail_returjual');
    }
}
