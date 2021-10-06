<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->smallInteger('ID', true);
            $table->string('RoleName', 50)->nullable();
            $table->timestamp('CreatedDate')->useCurrent();
            $table->string('CreatedBy', 50)->nullable();
            $table->timestamp('LastModifiedDate')->useCurrent();
            $table->string('LastModifiedBy', 50)->nullable();
            $table->smallInteger('Level')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
