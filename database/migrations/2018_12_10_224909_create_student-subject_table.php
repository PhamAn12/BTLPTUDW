<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student-subject', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idstudent')->unsigned();
            $table->integer('idsubject')->unsigned();            
            $table->foreign('idstudent')->references('id')->on('user_student')
            ->onDelete('cascade');
            $table->foreign('idsubject')->references('id')->on('subject')
            ->onDelete('cascade');            
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
        Schema::dropIfExists('student-subject');
    }
}
