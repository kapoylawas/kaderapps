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
        Schema::table('kelurahans', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatan_id');
            $table->foreign('kecamatan_id', 'fk_kelurahan_kecamatan')->references('id')->on('kecamatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kelurahans', function (Blueprint $table) {
            $table->dropForeign('kecamatan_id');
            $table->dropColumn('kecamatan_id');
        });
    }
};
