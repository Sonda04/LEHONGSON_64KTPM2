<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItCentersTable extends Migration
{
    public function up()
    {
        Schema::create('it_centers', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('location'); 
            $table->string('contact_email')->unique(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        //
    }
}
