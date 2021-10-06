<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kabupaten', function (Blueprint $table) {
            $table->foreign(['id_provinsi'], 'fk_KabupatenProvinsi')->references(['id_provinsi'])->on('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kabupaten', function (Blueprint $table) {
            $table->dropForeign('fk_KabupatenProvinsi');
        });
    }
}
