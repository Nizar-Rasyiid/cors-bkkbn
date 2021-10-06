<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->integer('id_kelurahan', true);
            $table->string('nama_kelurahan', 50)->nullable();
            $table->char('KodeDepdagri', 1)->nullable();
            $table->integer('id_kecamatan')->nullable();
            $table->tinyInteger('IsActive')->nullable();
            $table->integer('OriginalID')->nullable();
            $table->string('OriginalNama', 50)->nullable();
            $table->char('OriginalKode', 2)->nullable();
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->integer('id_kelurahan_old')->nullable();
            $table->string('nama_kelurahan_old', 50)->nullable();
            $table->char('kode_depdagri_old', 2)->nullable();
            $table->string('flag_status', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
