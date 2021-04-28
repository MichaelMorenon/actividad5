<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();


        for ($i=0;$i<=20;$i++){
            User::create([
            'name' => $faker->name,
            'lastname' => $faker->lastName,
            'email' => $faker->email
            ]);

    }
    }
}
