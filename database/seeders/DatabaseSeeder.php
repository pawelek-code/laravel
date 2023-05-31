<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $now = Carbon::now();

        $faker = Faker::create();

        $people = array();

        for ($i = 0; $i < 200; $i++) {
            $people[] = [
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'city' => $faker->city,
                'country' => $faker->country,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }
        
        DB::table('people')->insert($people);
    }
}
