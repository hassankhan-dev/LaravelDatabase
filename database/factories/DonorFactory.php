<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\donor>
 */
class DonorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIdsWithRoleOne = DB::table('users')->where('RoleId', 1)->pluck('UserId')->toArray();
        return [
            'DonorName'=>fake()->name($gender = 'male'),
            'UserId'=>fake()->unique()->randomElement(range(min($userIdsWithRoleOne), max($userIdsWithRoleOne))),
            'DonorContact'=>fake()->phoneNumber(),
            'DonorAddress'=>fake()->address(),
            'CityId'=>fake()->randomElement(range(1,4)),
            'GroupId'=>fake()->randomElement(range(1,3)),
            'DonorGender'=>'Male',
            'DonorDOB'=>'2000-01-01',
            'DonorWeight'=>fake()->randomElement(range(50,60)),
            'DonorHeight'=>fake()->randomElement(range(4,6)),
        ];
    }
}
