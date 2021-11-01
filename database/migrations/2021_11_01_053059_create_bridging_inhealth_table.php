<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridgingInhealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridging_inhealth', function (Blueprint $table) {
            $table->string('no_sjp', 40)->default('')->primary();
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->dateTime('tglsep')->nullable();
            $table->dateTime('tglrujukan')->nullable();
            $table->string('no_rujukan', 30)->nullable();
            $table->string('kdppkrujukan', 12)->nullable();
            $table->string('nmppkrujukan', 200)->nullable();
            $table->string('kdppkpelayanan', 12)->nullable();
            $table->string('nmppkpelayanan', 200)->nullable();
            $table->enum('jnspelayanan', ['1', '2', '3', '4'])->nullable();
            $table->string('catatan', 100)->nullable();
            $table->string('diagawal', 10)->nullable();
            $table->string('nmdiagnosaawal', 100)->nullable();
            $table->string('diagawal2', 10);
            $table->string('nmdiagnosaawal2', 100);
            $table->string('kdpolitujuan', 5)->nullable();
            $table->string('nmpolitujuan', 50)->nullable();
            $table->enum('klsrawat', ['000', '100', '101', '102', '103', '104', '110', '200', '201', '202', '203', '204', '210', '300', '301', '302', '303', '304', '310', '311', '312', '400', '401', '402', '403', '404', '410', '411', '412', '413', '500', '510', '511', '512', '610', '611', '612', '613', '710', '711', '712', '713', '910', '911', '912', '913'])->nullable();
            $table->string('klsdesc', 50)->nullable();
            $table->string('kdbu', 12)->nullable();
            $table->string('nmbu', 200)->nullable();
            $table->enum('lakalantas', ['0', '1', '2'])->nullable();
            $table->string('lokasilaka', 100)->nullable();
            $table->string('user', 25)->nullable();
            $table->string('nomr', 15)->nullable();
            $table->string('nama_pasien', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jkel', ['LAKI-LAKI', 'PEREMPUAN'])->nullable();
            $table->string('no_kartu', 25)->nullable();
            $table->dateTime('tglpulang')->nullable();
            $table->string('plan', 35);
            $table->string('plandesc', 100);
            $table->string('idakomodasi', 20)->nullable();
            $table->string('tipesjp', 35)->nullable();
            $table->string('tipecob', 35)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bridging_inhealth');
    }
}
