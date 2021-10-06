<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetKkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_kk', function (Blueprint $table) {
            $table->integer('Periode_Sensus');
            $table->integer('id_provinsi');
            $table->integer('id_kabupaten');
            $table->integer('id_kecamatan');
            $table->integer('id_kelurahan');
            $table->integer('id_rw');
            $table->integer('id_rt');
            $table->bigInteger('Target_KK')->nullable();
            $table->string('CreatedBy', 100);
            $table->string('LastModifiedBy', 100);
            $table->timestamp('Created')->useCurrent();
            $table->timestamp('LastModified')->useCurrent();

            $table->primary(['Periode_Sensus', 'id_rt']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target_kk');
    }
}
