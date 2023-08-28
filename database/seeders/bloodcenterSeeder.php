<?php

namespace Database\Seeders;

use App\Models\bloodcenter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class bloodcenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        bloodcenter::insert([
            [
                "CenterName" => "karachi",
                "CenterAdress" => "abc karachi",
                "CenterContact" => "12345678901",
                "CityId" => 1,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "CenterName" => "lahore",
                "CenterAdress" => "abcd lahore",
                "CenterContact" => "12345678901",
                "CityId" => 2,
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
