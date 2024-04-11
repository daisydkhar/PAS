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
            $table->id('tid');
            $table->string('tfirstname',20);
            $table->string('middlename',20)->nullable();
            $table->string('tlastname',20);
            $table->string('temail',50);
            $table->string('tpassword',18);
            $table->string('tphno',10);
            $table->string('taddress',10);
            $table->string('tdob');
            $table->string('gender',10);
            $table->unsignedBigInteger('deptfk');
            $table->foreign('deptfk')->references('dept_id')->on('departments')->onDelete('cascade')->onUpdate('cascade');


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
