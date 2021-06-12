<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailKartuKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kartu_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id_detail_kk');
            $table->unsignedBigInteger('id_kk');
            $table->unsignedBigInteger('id_penduduk')->unique();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_kk')->references('id_kk')->on('kartu_keluarga')->onDelete('cascade');
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
        Schema::dropIfExists('detail_kartu_keluarga');
    }
}
