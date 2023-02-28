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
        Schema::table('riwayatjabatans', function (Blueprint $table) {
            $table->unsignedBigInteger('biodata_id');
            $table->foreign('biodata_id', 'fk_riwayatjabatan_biodata')->references('id')->on('biodatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayatjabatans', function (Blueprint $table) {
            $table->dropForeign('biodata_id');
            $table->dropColumn('biodata_id');
        });
    }
};
