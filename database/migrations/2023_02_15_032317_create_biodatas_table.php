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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelurahan');
            $table->unsignedBigInteger('id_kota');
            $table->unsignedBigInteger('id_kecamatan');
            $table->unsignedBigInteger('id_bank');
            $table->string('name');
            $table->string('alamat');
            $table->date('tglLahir');
            $table->string('norek');
            $table->string('nohp');
            $table->string('filektp');
            $table->string('filebukutabungan');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('id_kota')->references('id')->on('kotas');
            $table->foreign('id_kelurahan')->references('id')->on('kelurahans');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
            $table->foreign('id_bank')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
};
