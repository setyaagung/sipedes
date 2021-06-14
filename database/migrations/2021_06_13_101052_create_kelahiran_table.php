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
            $table->string('tempat_dilahirkan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->time('waktu_lahir');
            $table->integer('kelahiran');
            $table->string('jenis_lahir');
            $table->string('penolong');
            $table->unsignedBigInteger('id_ayah');
            $table->unsignedBigInteger('id_ibu');
            $table->bigInteger('nik_pelapor');
            $table->string('nama_pelapor');
            $table->integer('umur_pelapor');
            $table->string('jk_pelapor');
            $table->string('pekerjaan_pelapor');
            $table->string('alamat_pelapor');
            $table->timestamps();

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
