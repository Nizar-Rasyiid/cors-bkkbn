<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccessSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_access_survey', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_user');
            $table->integer('id_provinsi');
            $table->integer('id_kabupaten');
            $table->integer('id_kecamatan');
            $table->integer('id_kelurahan');
            $table->integer('id_rw');
            $table->integer('id_rt');
            $table->integer('Periode_Sensus');
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50);
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_access_survey');
    }
}
