<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->integer('id_kabupaten', true);
            $table->string('nama_kabupaten', 50);
            $table->char('KodeDepdagri', 2)->nullable();
            $table->integer('id_provinsi');
            $table->tinyInteger('IsActive')->nullable();
            $table->integer('OriginalID')->nullable();
            $table->string('OriginalNama', 50)->nullable();
            $table->char('OriginalKode', 2)->nullable();
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->integer('id_kabupaten_old')->nullable();
            $table->string('nama_kabupaten_old', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten');
    }
}
