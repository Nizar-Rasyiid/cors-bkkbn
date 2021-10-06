<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('PeriodeSensus')->nullable();
            $table->string('UserName', 50);
            $table->string('Password', 100);
            $table->string('NamaLengkap', 100)->nullable();
            $table->string('NIK', 50)->nullable();
            $table->string('Jabatan', 200)->nullable();
            $table->string('Foto', 200)->nullable();
            $table->string('Alamat', 200)->nullable();
            $table->integer('KabupatenKotaID')->nullable();
            $table->string('NoTelepon', 50)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('NIP', 50)->nullable();
            $table->tinyInteger('IsTemporary')->nullable();
            $table->smallInteger('RoleID')->nullable();
            $table->tinyInteger('IsActive')->nullable();
            $table->timestamp('CreatedDate')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModified')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->tinyInteger('Smartphone')->nullable();
            $table->string('EmailSent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_user');
    }
}
