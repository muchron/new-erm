<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeteksiDiniCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deteksi_dini_corona', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->date('tanggal');
            $table->string('nip', 20)->nullable()->index('nip');
            $table->enum('gejala_demam', ['Ya', 'Tidak'])->nullable();
            $table->enum('gejala_batuk', ['Ya', 'Tidak'])->nullable();
            $table->enum('gejala_sesak', ['Ya', 'Tidak'])->nullable();
            $table->date('gejala_tanggal_pertama')->nullable();
            $table->string('gejala_riwayat_sakit', 50)->nullable();
            $table->string('gejala_riwayat_periksa', 50)->nullable();
            $table->enum('faktor_riwayat_perjalanan', ['Ya', 'Tidak']);
            $table->string('faktor_asal_daerah', 50);
            $table->date('faktor_tanggal_kedatangan');
            $table->enum('faktor_paparan_kontakpositif', ['Ya', 'Tidak']);
            $table->enum('faktor_paparan_kontakpdp', ['Ya', 'Tidak']);
            $table->enum('faktor_paparan_faskespositif', ['Ya', 'Tidak']);
            $table->enum('faktor_paparan_perjalananln', ['Ya', 'Tidak']);
            $table->enum('faktor_paparan_pasarhewan', ['Ya', 'Tidak']);
            $table->enum('kesimpulan', ['ODP', 'PDP', 'OTG', 'Bukan ketiganya']);
            $table->enum('tindak_lanjut', ['Rujuk', 'Rawat Inap', 'Rawat Jalan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deteksi_dini_corona');
    }
}
