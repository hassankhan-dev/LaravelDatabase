<?php

namespace Database\Seeders;

use App\Models\faqs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class faqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        faqs::create([
            "fQuestion" => "hwo i create my account",
            "fAnswer" => "go to signup page"
        ]);
    }
}
