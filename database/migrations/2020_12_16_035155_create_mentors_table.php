<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->bigIncrements('id_mentor');
            $table->bigInteger('admin_id')->nullable()->unsigned();
            $table->string('name_mentor');
            $table->string('address_mentor');
            $table->string('email_mentor');
            $table->string('password_mentor');
            $table->string('pth_ktp_mentor');
            $table->string('status_mentor');
            $table->foreign('admin_id')->references('id_admin')->on('admins')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mentors');
    }
}
