<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_donor', function (Blueprint $table) {
            $table->foreign(['petugas_aftap'], 'utd_donor_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['petugas_u_saring'], 'utd_donor_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_pendonor'], 'utd_donor_ibfk_3')->references(['no_pendonor'])->on('utd_pendonor')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_donor', function (Blueprint $table) {
            $table->dropForeign('utd_donor_ibfk_1');
            $table->dropForeign('utd_donor_ibfk_2');
            $table->dropForeign('utd_donor_ibfk_3');
        });
    }
}
