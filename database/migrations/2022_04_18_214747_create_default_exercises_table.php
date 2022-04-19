<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_exercises', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('duration')->nullable();
            $table->string('description')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('repetition')->nullable();
            $table->integer('serie')->nullable();
            $table->integer('restDuration')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('default_exercises');
    }
}
