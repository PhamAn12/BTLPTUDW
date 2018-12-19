<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name');
            $table->string('code_subject');
            $table->decimal('M',5,2);
            $table->decimal('M1',5,2);
            $table->decimal('M2',5,2);
            $table->decimal('STD1',5,2);
            $table->decimal('STD2',5,2);
            $table->integer('idlecturer')->unsigned();
            $table->integer('idsurvey')->unique();
            $table->foreign('idlecturer')->references('id')->on('user_lecturer')
                ->onDelete('cascade');
            // $table->foreign('idsurvey')->references('id')->on('survey')
            //     ->onDelete('cascade');    
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
        Schema::dropIfExists('subject');
    }
}
