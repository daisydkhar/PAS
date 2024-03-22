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
            $table->id('st-id');
            $table->string('rollno',20);
            $table->string('firstname',20);
            $table->string('middlename',20);
            $table->string('lastname',20);
            $table->string('st-email',20);
            $table->string('st-password',18);
            $table->string('semester',10);
            $table->string('phno',10);
            $table->string('address',20);
            $table->string('dob');
            $table->string('yearOfAd');
            $table->string('gender',10);
            $table->unsignedBigInteger('course-fk'); // Define as unsignedBigInteger to match courses table
            $table->foreign('course-fk')->references('course_id')->on('courses')->onDelete('cascade')->onUpdate('cascade'); // Reference course_id column in courses table

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
        Schema::dropIfExists('students');
    }
};
