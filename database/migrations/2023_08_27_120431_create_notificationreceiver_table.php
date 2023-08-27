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
        Schema::create('notificationreceivers', function (Blueprint $table) {
            $table->increments('ReceiverId');
            $table->unsignedInteger('NotificationId');
            $table->unsignedInteger('UserId');
            $table->enum('status',['delivered','seen']);
            $table->foreign('NotificationId')->references('NotificationId')->on('notifications')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('UserId')->references('UserId')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificationreceiver');
    }
};
