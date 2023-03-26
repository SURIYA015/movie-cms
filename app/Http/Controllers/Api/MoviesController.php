<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MoviesDetail;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getMovies(){
        return response()->json([
            'movies'=>MoviesDetail::get()
        ]);
    }
}
