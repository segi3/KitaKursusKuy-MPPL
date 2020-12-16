<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_tutors', function (Blueprint $table) {
            $table->bigIncrements('id_partner');
            $table->bigInteger('mentor_id')->nullable()->unsigned();
            $table->foreign('mentor_id')->references('id_mentor')->on('mentors')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('date_in_partner')->nullable();
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
        Schema::dropIfExists('partner_tutors');
    }
}
