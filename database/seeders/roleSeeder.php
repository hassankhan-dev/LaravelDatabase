<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        role::insert([
            [
                'RoleName'=>'Donor',
                'created_at'=>$now,
                'updated_at'=>$now
            ],
            [
                'RoleName'=>'Recipient',
                'created_at'=>$now,
                'updated_at'=>$now
            ],
            [
                'RoleName'=>'Admin',
                'created_at'=>$now,
                'updated_at'=>$now
            ]
        ]);
    }
}
