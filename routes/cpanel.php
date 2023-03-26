<?php
use Illuminate\Support\Facades\Route;

Route::domain(config('app.cms_domain'))->group(function () {
    require __DIR__.'/auth.php';
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('login.submit');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'App\Http\Controllers\cms\HomeController@index')->name("cms.home.index");
        Route::get('/dashboard', 'App\Http\Controllers\cms\HomeController@showDashboard')->name("dashboard");
        Route::get('/change-password', [\App\Http\Controllers\cms\changePasswordController::class, 'changePassword'])->name('changePassword');
        Route::put('/change-password/{id}', [\App\Http\Controllers\cms\changePasswordController::class, 'passwordChange'])->name('cms.password.change');
        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("logout");

        //movies
        Route::get('/movie/index', 'App\Http\Controllers\cms\MoviesController@index')->name("cms.movies.index");
        Route::get('/movie/create', 'App\Http\Controllers\cms\MoviesController@create')->name("cms.movies.create");
        Route::post('/movie/store', 'App\Http\Controllers\cms\MoviesController@store')->name("cms.movies.store");


        //movie categories
        Route::get('/moviecategories/index', 'App\Http\Controllers\cms\MoviesCategoriesController@index')->name("cms.moviescategories.index");
        Route::get('/moviecategories/create', 'App\Http\Controllers\cms\MoviesCategoriesController@create')->name("cms.moviescategories.create");
        Route::post('/moviecategories/store', 'App\Http\Controllers\cms\MoviesCategoriesController@store')->name("cms.moviescategories.store");

        //Movie Language
        Route::get('/movielanguage/index', 'App\Http\Controllers\cms\LanguagesController@index')->name("cms.movieslanguages.index");
        Route::get('/movielanguage/create', 'App\Http\Controllers\cms\LanguagesController@create')->name("cms.movieslanguages.create");
        Route::post('/movielanguage/store', 'App\Http\Controllers\cms\LanguagesController@store')->name("cms.movieslanguages.store");




    });
});
