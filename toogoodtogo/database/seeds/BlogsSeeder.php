<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'id' => '1',
                'title' => 'Pizza Picasso',
                'discription' => 'HMMM! Beste italian pizza!',
                'type_of_food' => 'Pizza and Pasta',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => '2',
                'title' => 'Frituur Fritadel',
                'discription' => 'Real Flemisch Fries.',
                'type_of_food' => 'Snackbar',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => '3',
                'title' => 'Ocean Shusi',
                'discription' => 'Fresh shusi @Ghent',
                'type_of_food' => 'Sushi',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => '4',
                'title' => 'Pizza Roma',
                'discription' => 'Authentic Italian Pizza!',
                'type_of_food' => 'Italian',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => '5',
                'title' => 'Hap-Hap',
                'discription' => 'A snack on the go.',
                'type_of_food' => 'Sandwish',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => '6',
                'title' => 'Revue',
                'discription' => 'Finnest seafood in Ghent',
                'type_of_food' => 'Seafood',
                'created_at' => Carbon\Carbon::now(),
            ],
        ]);
    }
}
