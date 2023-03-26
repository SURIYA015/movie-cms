<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class MoviesDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<=10;$i++) {
            DB::table('movies_details')->insert([
                "categories_id" => $faker->numberBetween(1, 6),
                "movie_name" => $faker->name,
                "movie_image" => "https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg",
                "languages_id" => $faker->numberBetween(1, 6),
                "movie_description" => "Lorem Ipsum is simply dummy text of the printing",
                "movie_rating" => $faker->numberBetween(1, 5),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
