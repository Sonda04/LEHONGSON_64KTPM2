<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareDevicesTable extends Migration
{
    public function up()
    {
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id(); 
            $table->string('device_name'); 
            $table->string('type');
            $table->boolean('status')->default(true); 
            $table->unsignedBigInteger('center_id');
            $table->foreign('center_id')->references('id')->on('it_centers'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
