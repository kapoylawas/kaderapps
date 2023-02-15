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
        Schema::create('riwayatgajis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_kecamatan');
            $table->string('tahun');
            $table->string('tribulan');
            $table->string('nominal');
            $table->string('biayatranfer');
            $table->string('pajak');
            $table->string('nominalbersih');
            $table->timestamps();

            $table->foreign('id_jabatan')->references('id')->on('jabatans');
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
        Schema::dropIfExists('riwayatgajis');
    }
};
