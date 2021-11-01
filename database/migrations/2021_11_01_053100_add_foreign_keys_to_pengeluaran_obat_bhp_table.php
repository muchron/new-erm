<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPengeluaranObatBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengeluaran_obat_bhp', function (Blueprint $table) {
            $table->foreign(['nip'], 'pengeluaran_obat_bhp_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'pengeluaran_obat_bhp_ibfk_2')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengeluaran_obat_bhp', function (Blueprint $table) {
            $table->dropForeign('pengeluaran_obat_bhp_ibfk_1');
            $table->dropForeign('pengeluaran_obat_bhp_ibfk_2');
        });
    }
}
