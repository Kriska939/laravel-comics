<?php

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

    $Infocomics = config('comics');
    return view('home', ['Infocomics' => $Infocomics]);
})->name('home');

Route::get('/comicdetail/{id}', function ($id) {
    $Infocomics = config('comics');
    $comic = $Infocomics[$id];
    return view('comicdetail', compact('comic'));
})->name('comicdetail');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
