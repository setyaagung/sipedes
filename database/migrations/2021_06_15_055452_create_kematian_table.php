<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->bigIncrements('id_kematian');
            $table->unsignedBigInteger('id_kk');
            $table->unsignedBigInteger('id_penduduk')->unique();
            $table->date('tanggal_kematian');
            $table->time('waktu_kematian');
            $table->string('sebab_kematian');
            $table->string('tempat_kematian');
            $table->string('keterangan');
            $table->unsignedBigInteger('id_ayah');
            $table->unsignedBigInteger('id_ibu');
            $table->bigInteger('nik_pelapor');
            $table->string('nama_pelapor');
            $table->integer('umur_pelapor');
            $table->string('jk_pelapor');
            $table->string('pekerjaan_pelapor');
            $table->string('alamat_pelapor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kematian');
    }
}
