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
    return view('guest.home', [
        'menu' => config('menu'),
    ]);
})->name('home');

Route::get('/fumetti', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.fumetti', [
        'menu' => config('menu'),
        'comics' => $comics,
    ]);
})->name('fumetti');

Route::get('/characters', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.characters', [
        'menu' => config('menu'),
    ]);
})->name('characters');

Route::get('/movies', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.movies', [
        'menu' => config('menu'),
    ]);
})->name('movies');

Route::get('/tv', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.tv', [
        'menu' => config('menu'),
    ]);
})->name('tv');

Route::get('/games', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.games', [
        'menu' => config('menu'),
    ]);
})->name('games');

Route::get('/collectibles', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.collectibles', [
        'menu' => config('menu'),
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.videos', [
        'menu' => config('menu'),
    ]);
})->name('videos');

Route::get('/fans', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.fans', [
        'menu' => config('menu'),
    ]);
})->name('fans');

Route::get('/news', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.news', [
        'menu' => config('menu'),
    ]);
})->name('news');

Route::get('/shop', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.shop', [
        'menu' => config('menu'),
    ]);
})->name('shop');

