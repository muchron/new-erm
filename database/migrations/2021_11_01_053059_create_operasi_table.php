<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operasi', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->dateTime('tgl_operasi');
            $table->string('jenis_anasthesi', 8);
            $table->enum('kategori', ['-', 'Khusus', 'Besar', 'Sedang', 'Kecil', 'Elektive', 'Emergency'])->nullable();
            $table->string('operator1', 20)->index('operator1');
            $table->string('operator2', 20)->index('operator2');
            $table->string('operator3', 20)->index('operator3');
            $table->string('asisten_operator1', 20)->index('asisten_operator1');
            $table->string('asisten_operator2', 20)->index('asisten_operator2');
            $table->string('asisten_operator3', 20)->nullable()->index('asisten_operator3_2');
            $table->string('instrumen', 20)->nullable()->index('asisten_operator3');
            $table->string('dokter_anak', 20)->index('dokter_anak');
            $table->string('perawaat_resusitas', 20)->index('perawaat_resusitas');
            $table->string('dokter_anestesi', 20)->index('dokter_anestesi');
            $table->string('asisten_anestesi', 20)->index('asisten_anestesi');
            $table->string('asisten_anestesi2', 20)->nullable()->index('asisten_anestesi2');
            $table->string('bidan', 20)->index('bidan');
            $table->string('bidan2', 20)->nullable()->index('operasi_ibfk_45');
            $table->string('bidan3', 20)->nullable()->index('operasi_ibfk_46');
            $table->string('perawat_luar', 20)->index('perawat_luar');
            $table->string('omloop', 20)->nullable()->index('operasi_ibfk_47');
            $table->string('omloop2', 20)->nullable()->index('operasi_ibfk_48');
            $table->string('omloop3', 20)->nullable()->index('operasi_ibfk_49');
            $table->string('omloop4', 20)->nullable()->index('omloop4');
            $table->string('omloop5', 20)->nullable()->index('omloop5');
            $table->string('dokter_pjanak', 20)->nullable()->index('dokter_pjanak');
            $table->string('dokter_umum', 20)->nullable()->index('dokter_umum');
            $table->string('kode_paket', 15)->index('kode_paket');
            $table->double('biayaoperator1');
            $table->double('biayaoperator2');
            $table->double('biayaoperator3');
            $table->double('biayaasisten_operator1');
            $table->double('biayaasisten_operator2');
            $table->double('biayaasisten_operator3')->nullable();
            $table->double('biayainstrumen')->nullable();
            $table->double('biayadokter_anak');
            $table->double('biayaperawaat_resusitas');
            $table->double('biayadokter_anestesi');
            $table->double('biayaasisten_anestesi');
            $table->double('biayaasisten_anestesi2')->nullable();
            $table->double('biayabidan');
            $table->double('biayabidan2')->nullable();
            $table->double('biayabidan3')->nullable();
            $table->double('biayaperawat_luar');
            $table->double('biayaalat');
            $table->double('biayasewaok');
            $table->double('akomodasi')->nullable();
            $table->double('bagian_rs');
            $table->double('biaya_omloop')->nullable();
            $table->double('biaya_omloop2')->nullable();
            $table->double('biaya_omloop3')->nullable();
            $table->double('biaya_omloop4')->nullable();
            $table->double('biaya_omloop5')->nullable();
            $table->double('biayasarpras')->nullable();
            $table->double('biaya_dokter_pjanak')->nullable();
            $table->double('biaya_dokter_umum')->nullable();
            $table->enum('status', ['Ranap', 'Ralan'])->nullable();

            $table->primary(['no_rawat', 'tgl_operasi', 'kode_paket']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operasi');
    }
}
