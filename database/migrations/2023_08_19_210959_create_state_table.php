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
        Schema::create('state', function (Blueprint $table) {
            $table->id();
            $table->string('state', 10);
            $table->unsignedBigInteger('id_rfid');
            $table->timestamps();
            $table->foreign('id_rfid')->references('id')->on('rfid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('state');
    }
    
};
