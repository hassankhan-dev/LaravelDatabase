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
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('InventoryId');
            $table->unsignedInteger('CenterId');
            $table->unsignedInteger('GroupId');
            $table->unsignedInteger('DonorId');
            $table->integer('Quantity');
            $table->date('ExpirationDate');
            $table->foreign('CenterId')->references('CenterId')->on('bloodcenters')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GroupId')->references('GroupId')->on('bloodgroups')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('DonorId')->references('DonorId')->on('donors')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
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
