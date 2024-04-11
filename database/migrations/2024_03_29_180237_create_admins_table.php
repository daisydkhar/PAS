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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('adminId');
            $table->string('firstname',20);
            $table->string('middlename',20)->nullable();
            $table->string('lastname',20);
            $table->string('stemail');;
            $table->string('lastname',20);
            $table->string('email');
            $table->string('password');
            $table->string('role',30);//as in the teacher or the non teaching staff can be admin
            $table->string('phno',11);
            $table->string('address',50);

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
        Schema::dropIfExists('admins');
    }
};
