<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInventarisPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventaris_peminjaman', function (Blueprint $table) {
            $table->foreign(['no_inventaris'], 'inventaris_peminjaman_ibfk_1')->references(['no_inventaris'])->on('inventaris')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'inventaris_peminjaman_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventaris_peminjaman', function (Blueprint $table) {
            $table->dropForeign('inventaris_peminjaman_ibfk_1');
            $table->dropForeign('inventaris_peminjaman_ibfk_2');
        });
    }
}
