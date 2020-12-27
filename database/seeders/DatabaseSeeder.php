<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);
        }
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     PostTableSeeder::class
        // ]);
    }
}
