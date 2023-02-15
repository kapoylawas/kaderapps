<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatjabatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sk');
            $table->unsignedBigInteger('id_jabatan');
            $table->string('nik');
            $table->unsignedBigInteger('id_kelurahan');
            $table->unsignedBigInteger('id_kecamatan');
            $table->string('tahun');
            $table->timestamps();

            $table->foreign('id_sk')->references('id')->on('sks');
            $table->foreign('id_jabatan')->references('id')->on('jabatans');
            $table->foreign('id_kelurahan')->references('id')->on('kelurahans');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayatjabatans');
    }
};
