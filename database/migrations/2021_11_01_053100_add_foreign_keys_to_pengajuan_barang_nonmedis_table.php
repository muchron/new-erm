<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPengajuanBarangNonmedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengajuan_barang_nonmedis', function (Blueprint $table) {
            $table->foreign(['nip'], 'pengajuan_barang_nonmedis_ibfk_1')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengajuan_barang_nonmedis', function (Blueprint $table) {
            $table->dropForeign('pengajuan_barang_nonmedis_ibfk_1');
        });
    }
}
