<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_student', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('msv');         
            $table->string('name');
            $table->string('email');
            $table->string('course');  
            $table->string('user_id')->unique();   
            $table->foreign('user_id')->references('username')->on('users')->onDelete('cascade');    
            $table->rememberToken();
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
        //
    }
}
