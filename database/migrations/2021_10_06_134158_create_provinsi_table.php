<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinsi', function (Blueprint $table) {
            $table->integer('id_provinsi', true);
            $table->string('nama_provinsi', 50);
            $table->string('KodeDepdagri', 2);
            $table->tinyInteger('IsActive');
            $table->integer('RegionalID')->nullable();
            $table->integer('OriginalID')->nullable();
            $table->string('OriginalNama', 50)->nullable();
            $table->string('OriginalKode', 2)->nullable();
            $table->timestamp('Created')->nullable()->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->nullable()->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->integer('id_provinsi_old')->nullable();
            $table->string('nama_provinsi_old', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinsi');
    }
}
