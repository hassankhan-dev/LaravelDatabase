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
        // Schema::dropIfExists('donor');
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('DonorId');
            $table->string('DonorName',500);
            $table->unsignedInteger('UserId');
            $table->string('DonorContact',100);
            $table->string('DonorAddress',500);
            $table->unsignedInteger('CityId');
            $table->unsignedInteger('GroupId');
            $table->enum('DonorGender',['Male','Female']);
            $table->date('DonorDOB');
            $table->integer('DonorWeight');
            $table->integer('DonorHeight');
            $table->timestamps();
            $table->foreign('UserId')->references('UserId')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CityId')->references('CityId')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GroupId')->references('GroupId')->on('bloodgroups')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor');
    }
};
