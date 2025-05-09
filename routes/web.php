<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['titolo' => 'Benvenuto nella Home']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['titolo' => 'Chi siamo']);
})->name('about');

Route::get('/contacts', function () {
    return view('contacts', ['titolo' => 'Contattaci']);
})->name('contacts');
