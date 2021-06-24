<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPermohonanKartuKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_permohonan_kartu_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id_detail_permohonan_kk');
            $table->unsignedBigInteger('id_permohonan_kk');
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('shdk');
            $table->timestamps();

            $table->foreign('id_permohonan_kk')->references('id_permohonan_kk')->on('permohonan_kartu_keluarga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_permohonan_kartu_keluarga');
    }
}
