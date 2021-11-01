<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsDetailReturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrs_detail_returbeli', function (Blueprint $table) {
            $table->string('no_retur_beli', 15)->index('no_retur_beli');
            $table->string('no_faktur', 20);
            $table->string('kode_brng', 10)->default('')->index('kode_brng');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->double('h_beli')->nullable();
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
        Schema::dropIfExists('ipsrs_detail_returbeli');
    }
}
