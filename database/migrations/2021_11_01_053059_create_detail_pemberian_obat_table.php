<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemberianObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemberian_obat', function (Blueprint $table) {
            $table->date('tgl_perawatan')->default('0000-00-00')->index('tgl_perawatan');
            $table->time('jam')->default('00:00:00')->index('jam');
            $table->string('no_rawat', 17)->default('')->index('no_rawat');
            $table->string('kode_brng', 15)->index('kd_obat');
            $table->double('h_beli')->nullable();
            $table->double('biaya_obat')->nullable()->index('biaya_obat');
            $table->double('jml')->index('jml');
            $table->double('embalase')->nullable()->index('tambahan');
            $table->double('tuslah')->nullable()->index('tuslah');
            $table->double('total')->index('total');
            $table->enum('status', ['Ralan', 'Ranap'])->nullable()->index('status');
            $table->char('kd_bangsal', 5)->nullable()->index('kd_bangsal');
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemberian_obat');
    }
}
