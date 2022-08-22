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
        Schema::create('odriver_ouser', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ouser_id')->references('id')->on('ousers')->onDelete('cascade');
            $table->foreignId('odriver_id')->references('id')->on('odrivers')->onDelete('cascade');
            $table->enum('completed',['yes','no','underprocess'])->default('underprocess');
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
        Schema::dropIfExists('odriver_ouser');
    }
};
