<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rw', function (Blueprint $table) {
            $table->integer('id_rw', true);
            $table->string('nama_rw', 50)->nullable();
            $table->char('KodeDepdagri', 5)->nullable();
            $table->integer('id_kelurahan')->nullable();
            $table->tinyInteger('IsActive')->nullable();
            $table->integer('OriginalID')->nullable();
            $table->string('OriginalNama', 50)->nullable();
            $table->char('OriginalKode', 2)->nullable();
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->integer('id_rw_old')->nullable();
            $table->string('nama_rw_old', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rw');
    }
}
