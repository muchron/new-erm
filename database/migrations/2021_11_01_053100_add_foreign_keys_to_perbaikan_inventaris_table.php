<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerbaikanInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perbaikan_inventaris', function (Blueprint $table) {
            $table->foreign(['no_permintaan'], 'perbaikan_inventaris_ibfk_1')->references(['no_permintaan'])->on('permintaan_perbaikan_inventaris')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'perbaikan_inventaris_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perbaikan_inventaris', function (Blueprint $table) {
            $table->dropForeign('perbaikan_inventaris_ibfk_1');
            $table->dropForeign('perbaikan_inventaris_ibfk_2');
        });
    }
}
