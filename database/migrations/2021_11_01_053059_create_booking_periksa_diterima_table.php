<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPeriksaDiterimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_periksa_diterima', function (Blueprint $table) {
            $table->string('no_booking', 17)->primary();
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_periksa_diterima');
    }
}
