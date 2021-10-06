<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kb', function (Blueprint $table) {
            $table->integer('KK_id');
            $table->bigInteger('data_kb_id', true);
            $table->bigInteger('NIK');
            $table->integer('alat_kontrasepsi');
            $table->integer('tahun_pemakaian');
            $table->string('alasan', 500);
            $table->timestamp('Created')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kb');
    }
}
