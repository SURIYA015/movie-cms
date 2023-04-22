<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MoviesDetail;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getTamilMovies(){
        $movies = MoviesDetail::where('languages_id',1)->get();
        foreach($movies as $index => $movie){
            $movies[$index]['categorie']    =   $movie->categories()->first()->categories;
            $movies[$index]['language']     =   $movie->languages()->first()->language;
        }
        return response()->json([
            'movies'    =>  $movies
        ]);
    }

    public function getTeluguMovies(){
        $movies = MoviesDetail::where('languages_id',7)->get();
        foreach($movies as $index => $movie){
            $movies[$index]['categorie']    =   $movie->categories()->first()->categories;
            $movies[$index]['language']     =   $movie->languages()->first()->language;
        }
        return response()->json([
            'movies'    =>  $movies
        ]);
    }

    public function getKannadaMovies(){
        $movies = MoviesDetail::where('languages_id',5)->get();
        foreach($movies as $index => $movie){
            $movies[$index]['categorie']    =   $movie->categories()->first()->categories;
            $movies[$index]['language']     =   $movie->languages()->first()->language;
        }
        return response()->json([
            'movies'    =>  $movies
        ]);
    }

    public function getMalyalamMovies(){
        $movies = MoviesDetail::where('languages_id',6)->get();
        foreach($movies as $index => $movie){
            $movies[$index]['categorie']    =   $movie->categories()->first()->categories;
            $movies[$index]['language']     =   $movie->languages()->first()->language;
        }
        return response()->json([
            'movies'    =>  $movies
        ]);
    }
}
