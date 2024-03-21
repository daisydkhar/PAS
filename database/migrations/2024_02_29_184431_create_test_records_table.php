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
        Schema::create('test_records', function (Blueprint $table) {
            $table->id('test-record');
            $table->float('score');
            $table->unsignedBigInteger('studentId-fk');
            $table->foreign('studentId-fk')->references('st-id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('paperId-fk');
            $table->foreign('paperId-fk')->references('paper_id')->on('papers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('testId-fk');
            $table->foreign('testId-fk')->references('test-id')->on('tests')->onDelete('cascade')->onUpdate('cascade');
            $table->float('total-IA');


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
        Schema::dropIfExists('test_records');
    }
};
