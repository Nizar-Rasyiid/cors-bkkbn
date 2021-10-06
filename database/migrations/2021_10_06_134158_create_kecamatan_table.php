<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->integer('id_kecamatan', true);
            $table->string('nama_kecamatan', 50);
            $table->char('KodeDepdagri', 2)->nullable();
            $table->integer('id_kabupaten');
            $table->tinyInteger('IsActive')->nullable();
            $table->integer('OriginalID')->nullable();
            $table->string('OriginalNama', 50)->nullable();
            $table->char('OriginalKode', 2)->nullable();
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->integer('id_kecamatan_old')->nullable();
            $table->string('nama_kecamatan_old', 50)->nullable();
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
        Schema::dropIfExists('kecamatan');
    }
}
