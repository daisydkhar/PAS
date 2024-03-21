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
        Schema::create('papers', function (Blueprint $table) {
            $table->id('paper_id');
            $table->string('p-name',30);
            $table->string('semester',10);
            $table->string('theory',2);
            $table->string('practical',2);
            $table->string('IA',2);
            $table->string('total',3);
            $table->unsignedBigInteger('p-coursefk');
            $table->foreign('p-coursefk')->references('course_id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('p-teacherfk');
            $table->foreign('p-teacherfk')->references('t-id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');




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
        Schema::dropIfExists('papers');
    }
};
