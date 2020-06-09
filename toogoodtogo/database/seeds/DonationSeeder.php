<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 20; $i++) {
            DB::table('donations')->insert([
                [
                    'id' => $i,
                    'firstname' => $faker->firstName(),
                    'lastname' => $faker->lastName,
                    'email' => $faker->email,
                    'discription' => $faker->sentence(),
                    'amount' => $faker->randomDigit.'.00',
                    'isPublic' => 1,
                    'created_at' => Carbon\Carbon::now(),
                ],
            ]);
        }
    }
}
