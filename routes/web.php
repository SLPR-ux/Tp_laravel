<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/Contact', function () {return view('contact');});
Route::get('/About', function () {return view('Qui somme nous?');});
