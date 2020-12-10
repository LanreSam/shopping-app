<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->integer('score');
            $table->smallInteger('course_unit');
            $table->integer('grade');
            $table->integer('points');
            $table->integer('quality_points');
            $table->integer('semester');
            $table->integer('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gp');
    }
}
