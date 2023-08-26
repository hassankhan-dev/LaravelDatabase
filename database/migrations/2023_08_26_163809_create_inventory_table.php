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
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('InventoryId');
            $table->unsignedInteger('CenterId');
            $table->unsignedInteger('GroupId');
            $table->unsignedInteger('DonorId');
            $table->integer('Quantity');
            $table->date('ExpirationDate');
            $table->timestamps();
            $table->foreign('CenterId')->references('CenterId')->on('bloodcenter')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GroupId')->references('GroupId')->on('bloodgroup')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('DonorId')->references('DonorId')->on('donor')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
