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
        Schema::create('donoractivities', function (Blueprint $table) {
            $table->increments('ActivityId');
            $table->unsignedInteger('DonorId');
            $table->unsignedInteger('GroupId');
            $table->integer('Quantity');
            $table->date('DonationDate');
            $table->foreign('DonorId')->references('DonorId')->on('donors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GroupId')->references('GroupId')->on('bloodgroups')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donoractivity');
    }
};
