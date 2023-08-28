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
        Schema::create('bloodcenters', function (Blueprint $table) {
            $table->increments('CenterId');
            $table->string('CenterName',100);
            $table->string('CenterAdress',200);
            $table->string('CenterContact',50);
            $table->unsignedInteger('CityId');
            $table->foreign('CityId')->references('CityId')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloodcenter');
    }
};
