<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePindahPergiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_pergi', function (Blueprint $table) {
            $table->bigIncrements('id_pindah_pergi');
            $table->bigInteger('id_kk');
            $table->integer('kode_pos_asal');
            $table->string('telepon_asal');
            $table->bigInteger('nik_pemohon');
            $table->string('nama_pemohon');
            $table->string('alasan_pindah');
            $table->text('alamat_tujuan');
            $table->integer('rt_tujuan');
            $table->integer('rw_tujuan');
            $table->string('kelurahan_tujuan');
            $table->string('kecamatan_tujuan');
            $table->string('kota_tujuan');
            $table->string('provinsi_tujuan');
            $table->integer('kode_pos_tujuan');
            $table->string('telepon_tujuan');
            $table->string('jenis_kepindahan');
            $table->string('status_no_kk_tidak_pindah');
            $table->string('status_no_kk_pindah');
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
        Schema::dropIfExists('pindah_pergi');
    }
}
