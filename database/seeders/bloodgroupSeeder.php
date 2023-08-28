<?php

namespace Database\Seeders;

use App\Models\bloodgroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class bloodgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        bloodgroup::insert([
            [
                'GroupName'=>'A+',
                'GroupDescription'=>'klflsfkdsfjkdsf',
                'created_at'=>$now,
                'updated_at'=>$now
            ],
            [
                'GroupName'=>'B+',
                'GroupDescription'=>'klflsfkdsfjkdsf',
                'created_at'=>$now,
                'updated_at'=>$now
            ],
            [
                'GroupName'=>'O+',
                'GroupDescription'=>'klflsfkdsfjkdsf',
                'created_at'=>$now,
                'updated_at'=>$now
            ]
            
        ]);
    }
}
