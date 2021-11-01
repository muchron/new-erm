<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInacbgKlaimBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inacbg_klaim_baru', function (Blueprint $table) {
            $table->string('no_sep', 40)->default('')->primary();
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
        Schema::dropIfExists('inacbg_klaim_baru');
    }
}
