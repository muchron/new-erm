<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsreturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrsreturbeli', function (Blueprint $table) {
            $table->string('no_retur_beli', 15)->primary();
            $table->date('tgl_retur')->nullable();
            $table->char('nip', 20)->nullable()->index('nip');
            $table->char('kode_suplier', 5)->index('kode_suplier');
            $table->string('catatan', 40);
            $table->double('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrsreturbeli');
    }
}
