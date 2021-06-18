<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPindahPergiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pindah_pergi', function (Blueprint $table) {
            $table->bigIncrements('id_detail_pindah_pergi');
            $table->unsignedBigInteger('id_pindah_pergi');
            $table->unsignedBigInteger('id_penduduk');
            $table->string('masa_berlaku_ktp');
            $table->string('shdk');
            $table->timestamps();

            $table->foreign('id_pindah_pergi')->references('id_pindah_pergi')->on('pindah_pergi')->onDelete('cascade');
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
        Schema::dropIfExists('detail_pindah_pergi');
    }
}
