<?php

namespace Database\Seeders;

use App\Models\requesttable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class requesttableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [['RecipientId'=>1,
        'DonorId'=>NULL,
        'GroupId'=>2,
        'Timings'=>'3-6',
        'RequestDate'=>'2023-08-27',
        'Quantity'=>200,
        'CenterId'=>1,
        'RequestStatus'=>'pending'],
        ['RecipientId'=>NULL,
        'DonorId'=>2,
        'GroupId'=>2,
        'Timings'=>'9-12',
        'RequestDate'=>'2023-08-27',
        'Quantity'=>300,
        'CenterId'=>1,
        'RequestStatus'=>'pending']
        ];
        foreach($data as $d){

            requesttable::create($d);
        }
    }
}
