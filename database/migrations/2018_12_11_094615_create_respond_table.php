<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respond', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idsurvey')->unsigned();
            $table->integer('idstudent-subject')->unsigned();
            $table->foreign('idsurvey')->references('id')->on('survey')
            ->onDelete('cascade');
            $table->foreign('idstudent-subject')->references('id')->on('student-subject')
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
        Schema::dropIfExists('respond');
    }
}
