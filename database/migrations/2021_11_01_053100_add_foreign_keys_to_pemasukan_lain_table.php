<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPemasukanLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemasukan_lain', function (Blueprint $table) {
            $table->foreign(['nip'], 'pemasukan_lain_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_kategori'], 'pemasukan_lain_ibfk_2')->references(['kode_kategori'])->on('kategori_pemasukan_lain')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemasukan_lain', function (Blueprint $table) {
            $table->dropForeign('pemasukan_lain_ibfk_1');
            $table->dropForeign('pemasukan_lain_ibfk_2');
        });
    }
}
