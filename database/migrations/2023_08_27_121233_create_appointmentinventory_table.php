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
        Schema::create('appointmentinventories', function (Blueprint $table) {
            $table->increments('aiId');
            $table->unsignedInteger('AppointmentId');
            $table->unsignedInteger('InventoryId');
            $table->integer('Quantity');
            $table->foreign('AppointmentId')->references('AppointmentId')->on('appointments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('InventoryId')->references('InventoryId')->on('inventories')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointmentinventory');
    }
};
