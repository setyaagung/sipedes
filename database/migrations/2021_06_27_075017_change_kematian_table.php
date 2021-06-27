<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kematian', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ayah')->nullable()->change();
            $table->unsignedBigInteger('id_ibu')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kematian', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ayah')->nullable(false)->change();
            $table->unsignedBigInteger('id_ibu')->nullable(false)->change();
        });
    }
}
