<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokopiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokopiutang', function (Blueprint $table) {
            $table->string('nota_piutang', 15)->primary();
            $table->date('tgl_piutang')->nullable();
            $table->char('nip', 20)->nullable()->index('nip');
            $table->string('no_member', 15)->nullable()->index('no_member');
            $table->string('nm_member', 50)->nullable();
            $table->string('catatan', 40)->nullable();
            $table->enum('jns_jual', ['Distributor', 'Grosir', 'Retail'])->nullable();
            $table->double('ongkir')->nullable();
            $table->double('uangmuka')->nullable();
            $table->double('sisapiutang');
            $table->date('tgltempo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokopiutang');
    }
}
