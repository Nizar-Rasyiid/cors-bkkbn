<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_data', function (Blueprint $table) {
            $table->integer('Id_kelompok_data', true);
            $table->string('nama_kelompok_data', 250);
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
        Schema::dropIfExists('kelompok_data');
    }
}
