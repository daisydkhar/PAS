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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('t-id');
            $table->string('t-firstname',50);
            $table->string('t-lastname',50);
            $table->string('t-email',50);
            $table->string('t-password',18);
            $table->string('t-phno',10);
            $table->string('t-address',10);
            $table->string('t-dob');
            $table->unsignedBigInteger('dept-fk');
            $table->foreign('dept-fk')->references('dept_id')->on('departments')->onDelete('cascade')->onUpdate('cascade');



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
        Schema::dropIfExists('teachers');
    }
};
