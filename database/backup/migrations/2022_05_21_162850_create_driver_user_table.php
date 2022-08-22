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
        Schema::create('driver_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->int('usercount');
            $table->emn('goorwent' ,['go','went']);
            $table->enum('status', ['hide','show'])->default('show');
            $table->timestamps();
        });
    }            // $table->foreignId('location_id')->references('id')->on('cities')->onDelete('cascade');


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_user');
    }
};
