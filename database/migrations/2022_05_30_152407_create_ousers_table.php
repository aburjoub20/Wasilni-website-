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
        Schema::create('ousers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained();
            $table->foreignId('Location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->string('usercount');
            $table->enum('goorwent',['go','went']);
            $table->enum('status',['hide','show'])->default('show');
            $table->string('price');
            $table->string('fullname');
            $table->string('additionalnumber');
            $table->string('time');  
            $table->string('date');    
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
        Schema::dropIfExists('ousers');
    }
};
