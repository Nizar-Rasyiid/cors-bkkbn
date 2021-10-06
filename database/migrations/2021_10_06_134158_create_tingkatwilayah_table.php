<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTingkatwilayahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkatwilayah', function (Blueprint $table) {
            $table->smallInteger('ID', true);
            $table->string('TingkatWilayah', 25)->nullable();
            $table->timestamp('CreatedDate')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModifiedDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tingkatwilayah');
    }
}
