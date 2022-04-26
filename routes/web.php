<?php

use App\Models\Movie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('movies',[
        'movies' => Movie::all()
    ]);
});

Route::get('movies/{movie}', function ($id ){
    return view('movie', [
        'movie' => Movie::findOrFail($id)
    ]);



});
