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
        Schema::create('odrivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->foreignId('Location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->string('starttime');   
            $table->string('endtime');    
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
        Schema::dropIfExists('odrivers');
    }
};
