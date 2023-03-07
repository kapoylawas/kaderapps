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
        Schema::create('rekapgaji', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_biodata')->nullable();
            $table->foreign('id_biodata')->references('id')->on('biodatas');
            $table->integer('total_gaji')->nullable();;
            $table->integer('total_adminbank')->nullable();;
            $table->integer('total_pajak')->nullable();;
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
        Schema::dropIfExists('rekapgaji');
    }
};
