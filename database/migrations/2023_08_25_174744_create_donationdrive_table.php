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
        Schema::create('donationdrive', function (Blueprint $table) {
            $table->increments('DriveId');
            $table->unsignedInteger('CenterId');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->time('DriveTiming');
            $table->string('DriveTitle',200)->after('DriveId');
            $table->string('DriveAddress',200);
            $table->enum('DriveStatus',['Coming','Completed','Cancelled']);
            $table->longText('DriveDescription');
            $table->foreign('CenterId')->references('CenterId')->on('bloodcenter')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donationdrive');
    }
};
