<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contactus;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        contactus::create([
            'ContactName'=>'Khurram',
            'ContactEmail'=>'khurram@gmail.com',
            'ContactMessage'=>'Your donation management system is brilliant. It helps both donor and recipient and all necessary details on one platform.'
        ]);
    }
}
