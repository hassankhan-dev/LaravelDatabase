<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipient', function (Blueprint $table) {
            $table->increments('RecipientId');
            $table->string('RecipientName',100);
            $table->unsignedInteger('UserId');
            $table->string('ReipientContact',50);
            $table->string('RecipientAdress',500);
            $table->unsignedInteger('CityId');
            $table->unsignedInteger('GroupId');
            $table->enum('RecipientGender',['Male','Female']);
            $table->date('RecipientDOB');
            $table->double('RecipientWeight',2,2);
            $table->double('RecipientHeight',2,2);
            $table->foreign('UserId')->references('UserId')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CityId')->references('CityId')->on('city')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GroupId')->references('GroupId')->on('bloodgroup')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipient');
    }
};
