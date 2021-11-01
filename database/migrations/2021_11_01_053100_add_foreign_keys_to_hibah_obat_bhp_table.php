<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHibahObatBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hibah_obat_bhp', function (Blueprint $table) {
            $table->foreign(['kode_pemberi'], 'hibah_obat_bhp_ibfk_1')->references(['kode_pemberi'])->on('pemberihibah')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'hibah_obat_bhp_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'hibah_obat_bhp_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hibah_obat_bhp', function (Blueprint $table) {
            $table->dropForeign('hibah_obat_bhp_ibfk_1');
            $table->dropForeign('hibah_obat_bhp_ibfk_2');
            $table->dropForeign('hibah_obat_bhp_ibfk_3');
        });
    }
}
