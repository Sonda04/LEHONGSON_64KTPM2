<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemasTable extends Migration
{
    public function up()
    {
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('location'); 
            $table->integer('total_seats'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        //
    }
}
