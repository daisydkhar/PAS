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
            $table->id('testrecord');
            $table->float('score');
            $table->unsignedBigInteger('studentIdfk');
            $table->foreign('studentIdfk')->references('stid')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('paperIdfk');
            $table->foreign('paperIdfk')->references('paper_id')->on('papers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('testIdfk');
            $table->foreign('testIdfk')->references('testid')->on('tests')->onDelete('cascade')->onUpdate('cascade');
            $table->float('totalIA');

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
