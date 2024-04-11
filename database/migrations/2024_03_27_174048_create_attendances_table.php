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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id('attendid');
            $table->string('monthyear'); 
            $table->integer('totalclasses');
            $table->integer('classesattended');
            $table->float('attendance-percentage');
            $table->unsignedBigInteger('tidfk');
            $table->unsignedBigInteger('stidfk');
            $table->unsignedBigInteger('pidfk');
            $table->foreign('tidfk')->references('tid')->on('teachers')->onDelete('cascade');
            $table->foreign('stidfk')->references('stid')->on('students')->onDelete('cascade');
            $table->foreign('pidfk')->references('paper_id')->on('papers')->onDelete('cascade');
           
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
        Schema::dropIfExists('attendances');
    }
};
