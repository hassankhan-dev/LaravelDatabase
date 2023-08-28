<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\recipient>
 */
class RecipientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIdsWithRoleOne = DB::table('users')->where('RoleId', 2)->pluck('UserId')->toArray();
        return [
            'RecipientName'=>fake()->name($gender = 'male'),
            'UserId'=>fake()->unique()->randomElement(range(min($userIdsWithRoleOne), max($userIdsWithRoleOne))),
            'ReipientContact'=>fake()->phoneNumber(),
            'RecipientAdress'=>fake()->address(),
            'CityId'=>fake()->randomElement(range(1,4)),
            'GroupId'=>fake()->randomElement(range(1,3)),
            'RecipientGender'=>'Male',
            'RecipientDOB'=>fake()->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
            'RecipientWeight'=>fake()->randomElement(range(50,60)),
            'RecipientHeight'=>fake()->randomElement(range(4,6)),
        ];
    }
}
