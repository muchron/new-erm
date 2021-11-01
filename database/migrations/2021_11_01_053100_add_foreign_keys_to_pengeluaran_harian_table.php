<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPengeluaranHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengeluaran_harian', function (Blueprint $table) {
            $table->foreign(['nip'], 'pengeluaran_harian_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_kategori'], 'pengeluaran_harian_ibfk_2')->references(['kode_kategori'])->on('kategori_pengeluaran_harian')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengeluaran_harian', function (Blueprint $table) {
            $table->dropForeign('pengeluaran_harian_ibfk_1');
            $table->dropForeign('pengeluaran_harian_ibfk_2');
        });
    }
}
