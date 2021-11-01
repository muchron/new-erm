<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBeriObatOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beri_obat_operasi', function (Blueprint $table) {
            $table->foreign(['kd_obat'], 'beri_obat_operasi_ibfk_2')->references(['kd_obat'])->on('obatbhp_ok')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'beri_obat_operasi_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beri_obat_operasi', function (Blueprint $table) {
            $table->dropForeign('beri_obat_operasi_ibfk_2');
            $table->dropForeign('beri_obat_operasi_ibfk_3');
        });
    }
}
