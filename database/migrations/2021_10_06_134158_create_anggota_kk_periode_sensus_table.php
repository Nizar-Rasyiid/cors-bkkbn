<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaKkPeriodeSensusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_kk_periode_sensus', function (Blueprint $table) {
            $table->integer('KK_id');
            $table->bigInteger('anggota_kk_id', true);
            $table->integer('periode_sensus');
            $table->bigInteger('NIK');
            $table->string('nama_anggota');
            $table->integer('jenis_kelamin');
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->integer('agama');
            $table->integer('pendidikan');
            $table->integer('jenis_pekerjaan');
            $table->integer('status_nikah');
            $table->date('tanggal_pernikahan')->nullable();
            $table->integer('status_dalam_keluarga');
            $table->integer('kewarganegaraan');
            $table->string('no_paspor', 25);
            $table->string('no_katas', 25);
            $table->string('nama_ayah', 50);
            $table->string('nama_ibu', 50);
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
        Schema::dropIfExists('anggota_kk_periode_sensus');
    }
}
