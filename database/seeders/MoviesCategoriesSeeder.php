<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MoviesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie_categorys    =   ['Romance', 'Thriller', 'Scifi','Erotic','Comedy','Crime'];
        foreach($movie_categorys as $movie_category) {
            DB::table('movies_categories')->insert([
                "categories" => $movie_category,
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }


    }
}
