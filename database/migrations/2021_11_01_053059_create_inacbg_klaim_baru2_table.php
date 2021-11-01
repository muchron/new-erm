<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInacbgKlaimBaru2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inacbg_klaim_baru2', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('no_sep', 40)->default('')->unique('no_sep');
            $table->string('patient_id', 30)->nullable();
            $table->string('admission_id', 30)->nullable();
            $table->string('hospital_admission_id', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inacbg_klaim_baru2');
    }
}
