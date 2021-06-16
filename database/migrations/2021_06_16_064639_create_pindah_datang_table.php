<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePindahDatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_datang', function (Blueprint $table) {
            $table->bigIncrements('id_pindah_datang');
            $table->bigInteger('no_kk');
            $table->string('nama_kepala_keluarga');
            $table->text('alamat_pemohon');
            $table->integer('rt_asal');
            $table->integer('rw_asal');
            $table->string('kelurahan_asal');
            $table->string('kecamatan_asal');
            $table->string('kota_asal');
            $table->string('provinsi_asal');
            $table->integer('kode_pos');
            $table->string('telepon');
            $table->bigInteger('nik_pemohon');
            $table->string('nama_pemohon');
            $table->string('status_no_kk');
            $table->bigInteger('tujuan_no_kk');
            $table->bigInteger('tujuan_nik_kepala_keluarga');
            $table->string('tujuan_nama_kepala_keluarga');
            $table->date('tanggal_kedatangan');
            $table->text('alamat_tujuan');
            $table->integer('rt_tujuan');
            $table->integer('rw_tujuan');
            $table->string('kelurahan_tujuan');
            $table->string('kecamatan_tujuan');
            $table->string('kota_tujuan');
            $table->string('provinsi_tujuan');
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
        Schema::dropIfExists('pindah_datangs');
    }
}
