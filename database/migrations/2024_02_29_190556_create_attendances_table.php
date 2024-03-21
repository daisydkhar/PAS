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
            $table->id('attend-id');
            $table->string('month-year'); 
            $table->integer('total-classes');
            $table->integer('classes-attended');
            $table->float('attendance-percentage');
            $table->unsignedBigInteger('t-id-fk');
            $table->unsignedBigInteger('st-id-fk');
            $table->unsignedBigInteger('p-id-fk');
            $table->foreign('t-id-fk')->references('t-id')->on('teachers')->onDelete('cascade');
            $table->foreign('st-id-fk')->references('st-id')->on('students')->onDelete('cascade');
            $table->foreign('p-id-fk')->references('paper_id')->on('papers')->onDelete('cascade');
          




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
