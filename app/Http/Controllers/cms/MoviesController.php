<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MoviesDetail;
use App\Models\MoviesCategories;
use App\Models\Language;
use Illuminate\Support\Facades\URL;
use Intervention\Image\ImageManagerStatic as Image;


class MoviesController extends Controller
{
    public function index()
    {
        $moviedetails   =   MoviesDetail::latest();
        $moviedetails   =   $moviedetails->paginate(10);
        return view('cms.movies.index', compact('moviedetails'));
    }

    public function create(){
        $movie_categories   =   MoviesCategories::latest()->get();
        $movie_languages   =   Language::latest()->get();

        return view('cms.movies.create',compact('movie_categories','movie_languages'));
    }

    public function store(Request $request){
        $request->validate([
            'movie_name' => 'required',
            'movie_image' => 'required',
            'movie_category' => 'required',
            'movie_language' => 'required',
            'movie_description' => 'required'
        ]);
        $moviedetails     =   new MoviesDetail();
        if($request->hasFile('movie_image'))
        {
            $fileWithExt = $request->file('movie_image');
            $filename =  date('Ymd-his'). "." .uniqid().".". $fileWithExt->clientExtension();
            $destinationPath = storage_path('app/public/movies/');
            $path=URL::to('/'.'storage/movies/'.$filename);
            $coverImg=Image::make($fileWithExt->getRealPath())->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $coverImg->orientate();
            $coverImg->save($destinationPath . $filename, 75);
            $moviedetails->movie_image  =   $path;
        }
        $moviedetails->movie_name            =   $request->movie_name;
        $moviedetails->categories_id         =   $request->movie_category;
        $moviedetails->languages_id          =   $request->movie_language;
        $moviedetails->movie_description     =   $request->movie_description;

        if($moviedetails->save()){
            return redirect()->route('cms.movies.index')->with('success','Movie Added Successfully.');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong.');
        }
    }

}
