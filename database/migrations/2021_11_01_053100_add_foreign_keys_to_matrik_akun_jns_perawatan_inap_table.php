<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMatrikAkunJnsPerawatanInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matrik_akun_jns_perawatan_inap', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'matrik_akun_jns_perawatan_inap_ibfk_1')->references(['kd_jenis_prw'])->on('jns_perawatan_inap')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['beban_kso'], 'matrik_akun_jns_perawatan_inap_ibfk_10')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['beban_menejemen'], 'matrik_akun_jns_perawatan_inap_ibfk_11')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['hpp_persediaan'], 'matrik_akun_jns_perawatan_inap_ibfk_12')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['pendapatan_tindakan'], 'matrik_akun_jns_perawatan_inap_ibfk_13')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['persediaan_bhp'], 'matrik_akun_jns_perawatan_inap_ibfk_14')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['utang_jasa_dokter'], 'matrik_akun_jns_perawatan_inap_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['utang_jasa_paramedis'], 'matrik_akun_jns_perawatan_inap_ibfk_3')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['utang_jasa_sarana'], 'matrik_akun_jns_perawatan_inap_ibfk_4')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['utang_kso'], 'matrik_akun_jns_perawatan_inap_ibfk_5')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['utang_menejemen'], 'matrik_akun_jns_perawatan_inap_ibfk_6')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['beban_jasa_dokter'], 'matrik_akun_jns_perawatan_inap_ibfk_7')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['beban_jasa_paramedis'], 'matrik_akun_jns_perawatan_inap_ibfk_8')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['beban_jasa_sarana'], 'matrik_akun_jns_perawatan_inap_ibfk_9')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matrik_akun_jns_perawatan_inap', function (Blueprint $table) {
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_1');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_10');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_11');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_12');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_13');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_14');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_2');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_3');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_4');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_5');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_6');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_7');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_8');
            $table->dropForeign('matrik_akun_jns_perawatan_inap_ibfk_9');
        });
    }
}
