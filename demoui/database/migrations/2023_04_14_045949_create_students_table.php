<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_email');
            $table->string('student_address');
            $table->enum('student_gender',['Male','Female']);
            $table->string('student_image');
            $table->timestamps();
        });
        Schema::create('courses', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
=======
            $table->id('course_id');
>>>>>>> c62c000a2b789a89729afb36e097040811a9f707
            $table->string('course_name');
            $table->string('course_des');
            $table->timestamps();
        });
        Schema::create('enrollments', function (Blueprint $table) {
<<<<<<< HEAD
            // $table->id();
            // $table->foreignId('student_id');
            // $table->foreignId('course_id');
            
            // $table->timestamps();
            // $table->primary(['course_id', 'student_id']);
            // //
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();
        
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
=======
            // $table->id('enrollments_id');
            $table->foreignId('student_id');
            $table->foreignId('course_id');
            $table->primary(['course_id', 'student_id']);
            $table->timestamps();
>>>>>>> c62c000a2b789a89729afb36e097040811a9f707
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
