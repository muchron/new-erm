<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateUtdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_utd', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'template_utd_ibfk_1')->references(['kd_jenis_prw'])->on('jns_perawatan_utd')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_utd', function (Blueprint $table) {
            $table->dropForeign('template_utd_ibfk_1');
        });
    }
}
