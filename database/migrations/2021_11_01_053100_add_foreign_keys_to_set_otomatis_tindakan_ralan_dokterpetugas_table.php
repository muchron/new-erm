<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetOtomatisTindakanRalanDokterpetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_otomatis_tindakan_ralan_dokterpetugas', function (Blueprint $table) {
            $table->foreign(['kd_dokter'], 'set_otomatis_tindakan_ralan_dokterpetugas_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'set_otomatis_tindakan_ralan_dokterpetugas_ibfk_2')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'set_otomatis_tindakan_ralan_dokterpetugas_ibfk_3')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_otomatis_tindakan_ralan_dokterpetugas', function (Blueprint $table) {
            $table->dropForeign('set_otomatis_tindakan_ralan_dokterpetugas_ibfk_1');
            $table->dropForeign('set_otomatis_tindakan_ralan_dokterpetugas_ibfk_2');
            $table->dropForeign('set_otomatis_tindakan_ralan_dokterpetugas_ibfk_3');
        });
    }
}
