<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('home');
})->name('home');



// routes header menu

Route::get('/uomo', function (){
    return view('man');
})->name('man');

Route::get('/donna', function (){
    return view('woman');
})->name('woman');

Route::get('/bambini', function (){
    return view('kids');
})->name('kids');
