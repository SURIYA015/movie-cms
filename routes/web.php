<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::domain(config('app.web_domain'))->group(function () {
    Route::get('/', function () {
        return view('frontend.index');
    })->name('frontend.index');
    Route::post('contact', [ContactController::class, 'storeContact'])
    ->name('contact.store');
});

