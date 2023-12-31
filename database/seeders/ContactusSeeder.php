<?php

namespace Database\Seeders;

use App\Models\contactus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class contactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now(); 
        contactus::insert([
            [
                "ContactName"=> "Asim",
                "ContactEmail"=> "asim@gmail.com",
                "ContactMessage"=> "hello asim",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "ContactName"=> "khurram",
                "ContactEmail"=> "khurram@gmail.com",
                "ContactMessage"=> "hello khurram" ,
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
