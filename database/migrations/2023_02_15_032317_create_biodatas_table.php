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
            $table->foreignId('id_kelurahan')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_kota')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_kecamatan')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_bank')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('alamat');
            $table->date('tglLahir');
            $table->string('norek');
            $table->string('nohp');
            $table->string('filektp');
            $table->string('filebukutabungan');
            $table->string('foto');
            $table->timestamps();
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
