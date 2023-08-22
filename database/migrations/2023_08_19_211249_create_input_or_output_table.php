<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('input_or_output', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rfid');
            $table->integer('time');
            $table->timestamps();
    
            $table->foreign('id_rfid')->references('id')->on('rfid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('input_or_output');
    }
    
};
