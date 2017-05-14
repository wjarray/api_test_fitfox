<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Lesson table in the database with it's entries
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lesson_name');
            $table->string('description');
            $table->integer('nb_places')->unsigned();
            $table->integer('nb_sub')->unsigned();
            $table->integer('start_time')->unsigned();
            $table->integer('end_time')->unsigned();
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
      // We suppress the table if it exists
        Schema::dropIfExists('lessons');
    }
}
