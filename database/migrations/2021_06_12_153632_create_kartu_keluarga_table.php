<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartuKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id_kk');
            $table->bigInteger('no_kk')->unique();
            $table->bigInteger('id_penduduk')->unique();
            $table->string('alamat_kk');
            $table->integer('rt_kk');
            $table->integer('rw_kk');
            $table->string('kelurahan_kk');
            $table->string('kecamatan_kk');
            $table->string('kota_kk');
            $table->string('provinsi_kk');
            $table->string('negara_kk');
            $table->integer('kode_pos_kk');
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
        Schema::dropIfExists('kartu_keluarga');
    }
}
