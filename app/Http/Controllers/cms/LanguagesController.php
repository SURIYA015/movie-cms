<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;

class LanguagesController extends Controller
{
    public function index()
    {
        $movielanguages   =   Language::latest();
        $movielanguages   =   $movielanguages->paginate(10);
        return view('cms.language.index', compact('movielanguages'));
    }

    public function create(){
        return view('cms.language.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_language' => 'required|string'
        ]);
        $movielanguages    =   new Language();
        $movielanguages->language    =   $request->movie_language;
        if ($movielanguages->save()) {
            return redirect()->route('cms.movieslanguages.index')->with(['alert-type' => 'success', 'message' => 'Genres Created Successfully']);
        } else {
            return redirect()->route('cms.movieslanguages.index')->with(['alert-type' => 'error', 'message' => 'Failed']);
        }
    }
}
