<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id_course');
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->bigInteger('mentor_id')->nullable()->unsigned();
            $table->string('title_course');
            $table->string('price_course');
            $table->string('description_course');
            $table->foreign('category_id')->references('id_category')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mentor_id')->references('id_mentor')->on('mentors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('courses');
    }
}
