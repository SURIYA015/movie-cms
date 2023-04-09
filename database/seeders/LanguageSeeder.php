<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie_languages    =   ['Tamil', 'English', 'Marathi','Hindi','Kannada','Malyalam','Telugu'];
        foreach($movie_languages as $movie_language) {
            DB::table('languages')->insert([
                "language" => $movie_language,
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
