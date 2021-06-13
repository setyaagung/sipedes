<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->bigIncrements('id_kelahiran');
            $table->unsignedBigInteger('id_penduduk');
            $table->unsignedBigInteger('id_kk');
            $table->string('nama_bayi');
            $table->string('jenis_kelamin');
            $table->decimal('berat_bayi', 8, 2);
            $table->integer('panjang_bayi');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('lokasi_lahir');
            $table->string('nama_penolong');
            $table->timestamps();

            $table->foreign('id_kk')->references('id_kk')->on('detail_kartu_keluarga')->onDelete('cascade');
            $table->foreign('id_penduduk')->references('id_penduduk')->on('penduduk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelahiran');
    }
}
