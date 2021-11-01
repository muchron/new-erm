<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryPresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_presensi', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->enum('shift', ['Pagi', 'Pagi2', 'Pagi3', 'Pagi4', 'Pagi5', 'Pagi6', 'Pagi7', 'Pagi8', 'Pagi9', 'Pagi10', 'Siang', 'Siang2', 'Siang3', 'Siang4', 'Siang5', 'Siang6', 'Siang7', 'Siang8', 'Siang9', 'Siang10', 'Malam', 'Malam2', 'Malam3', 'Malam4', 'Malam5', 'Malam6', 'Malam7', 'Malam8', 'Malam9', 'Malam10', 'Midle Pagi1', 'Midle Pagi2', 'Midle Pagi3', 'Midle Pagi4', 'Midle Pagi5', 'Midle Pagi6', 'Midle Pagi7', 'Midle Pagi8', 'Midle Pagi9', 'Midle Pagi10', 'Midle Siang1', 'Midle Siang2', 'Midle Siang3', 'Midle Siang4', 'Midle Siang5', 'Midle Siang6', 'Midle Siang7', 'Midle Siang8', 'Midle Siang9', 'Midle Siang10', 'Midle Malam1', 'Midle Malam2', 'Midle Malam3', 'Midle Malam4', 'Midle Malam5', 'Midle Malam6', 'Midle Malam7', 'Midle Malam8', 'Midle Malam9', 'Midle Malam10']);
            $table->dateTime('jam_datang')->nullable();
            $table->dateTime('jam_pulang')->nullable();
            $table->enum('status', ['Tepat Waktu', 'Terlambat Toleransi', 'Terlambat I', 'Terlambat II', 'Tepat Waktu & PSW', 'Terlambat Toleransi & PSW', 'Terlambat I & PSW', 'Terlambat II & PSW']);
            $table->string('keterlambatan', 20);
            $table->string('durasi', 20)->nullable();
            $table->string('photo', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary_presensi');
    }
}
