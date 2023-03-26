<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MoviesCategories;

class MoviesCategoriesController extends Controller
{
    public function index()
    {
        $moviecategories   =   MoviesCategories::latest();
        $moviecategories   =   $moviecategories->paginate(10);
        return view('cms.moviecategories.index', compact('moviecategories'));
    }

    public function create(){
        return view('cms.moviecategories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_genre' => 'required|string'
        ]);
        $moviecategories    =   new MoviesCategories();
        $moviecategories->categories    =   $request->movie_genre;
        if ($moviecategories->save()) {
            return redirect()->route('cms.moviescategories.index')->with(['alert-type' => 'success', 'message' => 'Genres Created Successfully']);
        } else {
            return redirect()->route('cms.moviecategories.index')->with(['alert-type' => 'error', 'message' => 'Failed']);
        }
    }
}
