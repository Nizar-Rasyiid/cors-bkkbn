<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKkPeriodeSensusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kk_periode_sensus', function (Blueprint $table) {
            $table->integer('KK_id', true);
            $table->integer('periode_sensus');
            $table->integer('NoKK');
            $table->bigInteger('NIK_KK');
            $table->string('nama_kk', 50);
            $table->string('alamat_kk', 100);
            $table->integer('id_provinsi');
            $table->integer('id_kab');
            $table->integer('id_kec');
            $table->integer('id_kel');
            $table->integer('id_rw');
            $table->integer('id_rt');
            $table->timestamp('create_date')->useCurrent();
            $table->string('create_by', 50);
            $table->timestamp('update_date')->useCurrent();
            $table->string('update_by', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kk_periode_sensus');
    }
}
