<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_ktp', function (Blueprint $table) {
            $table->bigIncrements('id_permohonan_ktp');
            $table->unsignedBigInteger('id_penduduk');
            $table->bigInteger('no_kk');
            $table->string('status');
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
        Schema::dropIfExists('permohonan_ktp');
    }
}
