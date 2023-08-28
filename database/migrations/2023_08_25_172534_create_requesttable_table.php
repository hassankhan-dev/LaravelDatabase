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
        Schema::create('requesttables', function (Blueprint $table) {
            $table->increments('RequestId');
            $table->unsignedInteger('RecipientId')->nullable();
            $table->unsignedInteger('DonorId')->nullable();
            $table->unsignedInteger('GroupId');
            $table->string('Timings');
            $table->date('RequestDate');
            $table->integer('Quantity');
            $table->unsignedInteger('CenterId');
            $table->enum('RequestStatus',['pending','confirmed','cancelled']);
            $table->timestamps();
            $table->foreign('RecipientId')->references('RecipientId')->on('recipients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('DonorId')->references('DonorId')->on('donors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GroupId')->references('GroupId')->on('bloodgroups')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CenterId')->references('CenterId')->on('bloodcenters')->onUpdate('cascade')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requesttable');
    }
};
