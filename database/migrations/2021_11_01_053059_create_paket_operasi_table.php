<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_operasi', function (Blueprint $table) {
            $table->string('kode_paket', 15)->primary();
            $table->string('nm_perawatan', 80)->index('nm_perawatan');
            $table->enum('kategori', ['Kebidanan', 'Operasi'])->nullable()->index('kategori');
            $table->double('operator1')->index('operator1');
            $table->double('operator2')->index('operator2');
            $table->double('operator3')->index('operator3');
            $table->double('asisten_operator1')->nullable()->index('asisten_operator1');
            $table->double('asisten_operator2')->index('asisten_operator2');
            $table->double('asisten_operator3')->nullable()->index('asisten_operator3_2');
            $table->double('instrumen')->nullable()->index('asisten_operator3');
            $table->double('dokter_anak')->index('dokter_anak');
            $table->double('perawaat_resusitas')->index('perawat_resusitas');
            $table->double('dokter_anestesi')->index('dokter_anestasi');
            $table->double('asisten_anestesi')->index('asisten_anastesi');
            $table->double('asisten_anestesi2')->nullable()->index('asisten_anestesi2');
            $table->double('bidan')->index('bidan');
            $table->double('bidan2')->nullable()->index('bidan2');
            $table->double('bidan3')->nullable()->index('bidan3');
            $table->double('perawat_luar')->index('perawat_luar');
            $table->double('sewa_ok')->index('sewa_ok');
            $table->double('alat')->index('alat');
            $table->double('akomodasi')->nullable()->index('sewa_vk');
            $table->double('bagian_rs')->index('bagian_rs');
            $table->double('omloop')->index('omloop');
            $table->double('omloop2')->nullable()->index('omloop2');
            $table->double('omloop3')->nullable()->index('omloop3');
            $table->double('omloop4')->nullable()->index('omloop4');
            $table->double('omloop5')->nullable()->index('omloop5');
            $table->double('sarpras')->nullable();
            $table->double('dokter_pjanak')->nullable();
            $table->double('dokter_umum')->nullable();
            $table->char('kd_pj', 3)->nullable()->index('kd_pj');
            $table->enum('status', ['0', '1'])->nullable()->index('status');
            $table->enum('kelas', ['-', 'Rawat Jalan', 'Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas Utama', 'Kelas VIP', 'Kelas VVIP'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_operasi');
    }
}
