<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCssdBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cssd_barang', function (Blueprint $table) {
            $table->foreign(['no_inventaris'], 'cssd_barang_ibfk_1')->references(['no_inventaris'])->on('inventaris')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cssd_barang', function (Blueprint $table) {
            $table->dropForeign('cssd_barang_ibfk_1');
        });
    }
}
