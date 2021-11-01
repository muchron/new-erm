<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisProdusenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_produsen', function (Blueprint $table) {
            $table->string('kode_produsen', 10)->primary();
            $table->string('nama_produsen', 40)->nullable()->index('nama_produsen');
            $table->string('alamat_produsen', 70)->nullable()->index('alamat_produsen');
            $table->string('no_telp', 13)->nullable()->index('no_telp');
            $table->string('email', 25)->nullable()->index('email');
            $table->string('website_produsen', 30)->nullable()->index('website_produsen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris_produsen');
    }
}
