<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPindahDatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pindah_datang', function (Blueprint $table) {
            $table->bigIncrements('id_detail_pindah_datang');
            $table->unsignedBigInteger('id_pindah_datang');
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('masa_berlaku_ktp');
            $table->string('shdk');
            $table->timestamps();

            $table->foreign('id_pindah_datang')->references('id_pindah_datang')->on('pindah_datang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pindah_datang');
    }
}
