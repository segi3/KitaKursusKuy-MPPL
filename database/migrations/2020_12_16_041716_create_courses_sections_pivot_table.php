<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesSectionsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_sections_pivot', function (Blueprint $table) {
            $table->bigIncrements('id_course_pivot');
            $table->bigInteger('course_id')->nullable()->unsigned();
            $table->bigInteger('chapter_id')->nullable()->unsigned();
            $table->timestamps();
            $table->foreign('course_id')->references('id_course')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('chapter_id')->references('id_chapter')->on('chapters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_sections_pivot');
    }
}
