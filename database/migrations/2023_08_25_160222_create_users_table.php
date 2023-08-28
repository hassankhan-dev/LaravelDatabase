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
        
        
        Schema::create('users', function (Blueprint $table) {
            $table->increments('UserId');
            $table->string('UserName',500);
            $table->string('UserEmail',500)->unique();
            $table->string('UserPassword',500);
            $table->enum('UserStatus',['active','unactive']);
            $table->unsignedInteger('RoleId');
            $table->foreign('RoleId')->references('RoleId')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
