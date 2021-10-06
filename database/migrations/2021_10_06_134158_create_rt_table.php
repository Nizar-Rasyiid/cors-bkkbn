<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rt', function (Blueprint $table) {
            $table->integer('id_rt', true);
            $table->integer('RTID')->nullable();
            $table->string('KodeRT', 100)->nullable();
            $table->string('nama_rt', 50)->nullable();
            $table->integer('id_rw')->nullable();
            $table->char('KodeRW', 5)->nullable();
            $table->string('NamaRW', 100)->nullable();
            $table->integer('KelurahanID')->nullable();
            $table->char('KodeKelurahan', 4)->nullable();
            $table->string('NamaKelurahan', 50)->nullable();
            $table->integer('KecamatanID')->nullable();
            $table->char('KodeKecamatan', 2)->nullable();
            $table->string('NamaKecamatan', 50)->nullable();
            $table->integer('KabupatenID')->nullable();
            $table->string('KodeKabupaten', 2)->nullable();
            $table->string('NamaKabupaten', 50)->nullable();
            $table->integer('ProvinsiID')->nullable();
            $table->char('KodePropinsi', 2)->nullable();
            $table->string('NamaProvinsi', 50)->nullable();
            $table->tinyInteger('IsActive');
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->string('flag')->nullable();
            $table->bigInteger('TargetKK')->nullable();
            $table->integer('id_rt_old')->nullable();
            $table->string('nama_rt_old')->nullable();
            $table->integer('RTID_old')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rt');
    }
}
