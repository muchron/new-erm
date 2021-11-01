<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetAkunRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_akun_ralan', function (Blueprint $table) {
            $table->foreign(['Tindakan_Ralan'], 'set_akun_ralan_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Dokter_Laborat_Ralan'], 'set_akun_ralan_ibfk_10')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Petugas_Laborat_Ralan'], 'set_akun_ralan_ibfk_11')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Petugas_Laborat_Ralan'], 'set_akun_ralan_ibfk_12')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Kso_Laborat_Ralan'], 'set_akun_ralan_ibfk_13')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Kso_Laborat_Ralan'], 'set_akun_ralan_ibfk_14')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['HPP_Persediaan_Laborat_Rawat_Jalan'], 'set_akun_ralan_ibfk_15')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Persediaan_BHP_Laborat_Rawat_Jalan'], 'set_akun_ralan_ibfk_16')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Radiologi_Ralan'], 'set_akun_ralan_ibfk_17')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Dokter_Radiologi_Ralan'], 'set_akun_ralan_ibfk_18')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Dokter_Radiologi_Ralan'], 'set_akun_ralan_ibfk_19')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Dokter_Tindakan_Ralan'], 'set_akun_ralan_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Petugas_Radiologi_Ralan'], 'set_akun_ralan_ibfk_20')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Petugas_Radiologi_Ralan'], 'set_akun_ralan_ibfk_21')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Kso_Radiologi_Ralan'], 'set_akun_ralan_ibfk_22')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Kso_Radiologi_Ralan'], 'set_akun_ralan_ibfk_23')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['HPP_Persediaan_Radiologi_Rawat_Jalan'], 'set_akun_ralan_ibfk_24')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Persediaan_BHP_Radiologi_Rawat_Jalan'], 'set_akun_ralan_ibfk_25')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Obat_Ralan'], 'set_akun_ralan_ibfk_26')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['HPP_Obat_Rawat_Jalan'], 'set_akun_ralan_ibfk_27')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Persediaan_Obat_Rawat_Jalan'], 'set_akun_ralan_ibfk_28')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Registrasi_Ralan'], 'set_akun_ralan_ibfk_29')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Dokter_Tindakan_Ralan'], 'set_akun_ralan_ibfk_3')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Operasi_Ralan'], 'set_akun_ralan_ibfk_30')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Dokter_Operasi_Ralan'], 'set_akun_ralan_ibfk_31')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Dokter_Operasi_Ralan'], 'set_akun_ralan_ibfk_32')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Paramedis_Operasi_Ralan'], 'set_akun_ralan_ibfk_33')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Paramedis_Operasi_Ralan'], 'set_akun_ralan_ibfk_34')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['HPP_Obat_Operasi_Ralan'], 'set_akun_ralan_ibfk_35')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Persediaan_Obat_Kamar_Operasi_Ralan'], 'set_akun_ralan_ibfk_36')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Tambahan_Ralan'], 'set_akun_ralan_ibfk_37')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Potongan_Ralan'], 'set_akun_ralan_ibfk_38')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Paramedis_Tindakan_Ralan'], 'set_akun_ralan_ibfk_4')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_Jasa_Medik_Paramedis_Tindakan_Ralan'], 'set_akun_ralan_ibfk_5')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_KSO_Tindakan_Ralan'], 'set_akun_ralan_ibfk_6')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Utang_KSO_Tindakan_Ralan'], 'set_akun_ralan_ibfk_7')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Laborat_Ralan'], 'set_akun_ralan_ibfk_8')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Beban_Jasa_Medik_Dokter_Laborat_Ralan'], 'set_akun_ralan_ibfk_9')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_akun_ralan', function (Blueprint $table) {
            $table->dropForeign('set_akun_ralan_ibfk_1');
            $table->dropForeign('set_akun_ralan_ibfk_10');
            $table->dropForeign('set_akun_ralan_ibfk_11');
            $table->dropForeign('set_akun_ralan_ibfk_12');
            $table->dropForeign('set_akun_ralan_ibfk_13');
            $table->dropForeign('set_akun_ralan_ibfk_14');
            $table->dropForeign('set_akun_ralan_ibfk_15');
            $table->dropForeign('set_akun_ralan_ibfk_16');
            $table->dropForeign('set_akun_ralan_ibfk_17');
            $table->dropForeign('set_akun_ralan_ibfk_18');
            $table->dropForeign('set_akun_ralan_ibfk_19');
            $table->dropForeign('set_akun_ralan_ibfk_2');
            $table->dropForeign('set_akun_ralan_ibfk_20');
            $table->dropForeign('set_akun_ralan_ibfk_21');
            $table->dropForeign('set_akun_ralan_ibfk_22');
            $table->dropForeign('set_akun_ralan_ibfk_23');
            $table->dropForeign('set_akun_ralan_ibfk_24');
            $table->dropForeign('set_akun_ralan_ibfk_25');
            $table->dropForeign('set_akun_ralan_ibfk_26');
            $table->dropForeign('set_akun_ralan_ibfk_27');
            $table->dropForeign('set_akun_ralan_ibfk_28');
            $table->dropForeign('set_akun_ralan_ibfk_29');
            $table->dropForeign('set_akun_ralan_ibfk_3');
            $table->dropForeign('set_akun_ralan_ibfk_30');
            $table->dropForeign('set_akun_ralan_ibfk_31');
            $table->dropForeign('set_akun_ralan_ibfk_32');
            $table->dropForeign('set_akun_ralan_ibfk_33');
            $table->dropForeign('set_akun_ralan_ibfk_34');
            $table->dropForeign('set_akun_ralan_ibfk_35');
            $table->dropForeign('set_akun_ralan_ibfk_36');
            $table->dropForeign('set_akun_ralan_ibfk_37');
            $table->dropForeign('set_akun_ralan_ibfk_38');
            $table->dropForeign('set_akun_ralan_ibfk_4');
            $table->dropForeign('set_akun_ralan_ibfk_5');
            $table->dropForeign('set_akun_ralan_ibfk_6');
            $table->dropForeign('set_akun_ralan_ibfk_7');
            $table->dropForeign('set_akun_ralan_ibfk_8');
            $table->dropForeign('set_akun_ralan_ibfk_9');
        });
    }
}
