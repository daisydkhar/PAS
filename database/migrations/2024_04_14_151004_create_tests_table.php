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
        Schema::create('tests', function (Blueprint $table) {

            $table->string('testid', 10)->primary();
            $table->date('testdate')->default(DB::raw('CURDATE()'));
            $table->float('score')->nullable();
            $table->float('totalIA')->nullable();
            $table->unsignedBigInteger('studentIdfk');
            $table->foreign('studentIdfk')->references('stid')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->string('paperIdfk');
            $table->foreign('paperIdfk')->references('paper_id')->on('papers')->onDelete('cascade')->onUpdate('cascade');
        
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
        Schema::dropIfExists('tests');
    }
};
