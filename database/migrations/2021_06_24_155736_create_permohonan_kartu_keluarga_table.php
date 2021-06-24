<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanKartuKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_kartu_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id_permohonan_kk');
            $table->unsignedBigInteger('id_penduduk');
            $table->bigInteger('no_kk_semula');
            $table->string('alasan');
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
        Schema::dropIfExists('permohonan_kartu_keluarga');
    }
}
