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
    $data = [
        'nome' => 'Lorenzo',
        'cognome' => 'Martini',
        'professione' => 'Svilppatore',
        'livello' => 'Meno de junior',
    ];

    return view('home', compact('data'));
})->name('Home');

Route::get('/about-us', function () {
    return view('about_us');
})->name('about');

Route::get('/contattaci', function () {
    return view('contattaci');
})->name('contattaci');