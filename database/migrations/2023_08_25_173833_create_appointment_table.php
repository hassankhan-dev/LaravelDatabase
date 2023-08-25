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
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('AppointmentId');
            $table->unsignedInteger('RequestId');
            $table->date('AppointmentDate');
            $table->enum('AppointmentStatus',['Coming','Confirmed']);
            $table->timestamps();
            $table->foreign('RequestId')->references('RequestId')->on('requesttable')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
