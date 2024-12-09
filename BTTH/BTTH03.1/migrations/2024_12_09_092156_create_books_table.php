<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->year('publication_year');
            $table->string('genre');
            $table->unsignedBigInteger('library_id'); 

            $table->foreign('library_id')->references('id')->on('libraries');
            $table->timestamps();
        });
    }

    public function down()
    {
        
    }
}
