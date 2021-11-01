<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('operasi', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'operasi_ibfk_31')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['operator1'], 'operasi_ibfk_32')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['operator2'], 'operasi_ibfk_33')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['operator3'], 'operasi_ibfk_34')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['asisten_operator1'], 'operasi_ibfk_35')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['asisten_operator2'], 'operasi_ibfk_36')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['instrumen'], 'operasi_ibfk_37')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_anak'], 'operasi_ibfk_38')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['perawaat_resusitas'], 'operasi_ibfk_39')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_anestesi'], 'operasi_ibfk_40')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE');
            $table->foreign(['asisten_anestesi'], 'operasi_ibfk_41')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['bidan'], 'operasi_ibfk_42')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['perawat_luar'], 'operasi_ibfk_43')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_paket'], 'operasi_ibfk_44')->references(['kode_paket'])->on('paket_operasi')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['bidan2'], 'operasi_ibfk_45')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['bidan3'], 'operasi_ibfk_46')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['omloop'], 'operasi_ibfk_47')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['omloop2'], 'operasi_ibfk_48')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['omloop3'], 'operasi_ibfk_49')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_pjanak'], 'operasi_ibfk_50')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_umum'], 'operasi_ibfk_51')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['asisten_operator3'], 'operasi_ibfk_52')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['asisten_anestesi2'], 'operasi_ibfk_53')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['omloop4'], 'operasi_ibfk_54')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['omloop5'], 'operasi_ibfk_55')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operasi', function (Blueprint $table) {
            $table->dropForeign('operasi_ibfk_31');
            $table->dropForeign('operasi_ibfk_32');
            $table->dropForeign('operasi_ibfk_33');
            $table->dropForeign('operasi_ibfk_34');
            $table->dropForeign('operasi_ibfk_35');
            $table->dropForeign('operasi_ibfk_36');
            $table->dropForeign('operasi_ibfk_37');
            $table->dropForeign('operasi_ibfk_38');
            $table->dropForeign('operasi_ibfk_39');
            $table->dropForeign('operasi_ibfk_40');
            $table->dropForeign('operasi_ibfk_41');
            $table->dropForeign('operasi_ibfk_42');
            $table->dropForeign('operasi_ibfk_43');
            $table->dropForeign('operasi_ibfk_44');
            $table->dropForeign('operasi_ibfk_45');
            $table->dropForeign('operasi_ibfk_46');
            $table->dropForeign('operasi_ibfk_47');
            $table->dropForeign('operasi_ibfk_48');
            $table->dropForeign('operasi_ibfk_49');
            $table->dropForeign('operasi_ibfk_50');
            $table->dropForeign('operasi_ibfk_51');
            $table->dropForeign('operasi_ibfk_52');
            $table->dropForeign('operasi_ibfk_53');
            $table->dropForeign('operasi_ibfk_54');
            $table->dropForeign('operasi_ibfk_55');
        });
    }
}
