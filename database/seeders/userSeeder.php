<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('./database/json/users.json');
        $users = json_decode($json);

        foreach($users as $user){
            user::create([
                'UserName'=>$user->UserName,
                'UserEmail'=>$user->UserEmail,
                'UserPassword'=>$user->UserPassword,
                'UserStatus'=>$user->UserStatus,
                'RoleId'=>$user->RoleId
            ]);
        }
    }
}
