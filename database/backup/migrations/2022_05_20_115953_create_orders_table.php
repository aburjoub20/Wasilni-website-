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
        Schema::create('orders', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('user_location_id')->references('id')->on('user_city')->onDelete('cascade');
            // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->foreignId('user_city_id')->constrained();;
            // $table->enum('compleated', ['yes','no'])->nullable();
            // $table->foreignId('user_id')->constrained();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
