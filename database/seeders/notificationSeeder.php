<?php

namespace Database\Seeders;

use App\Models\notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class notificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        notification::create([
            "Message" => "hello owais"
        ]);
    }
}
