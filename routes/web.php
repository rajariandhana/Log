<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('home');})->name('home');
Route::get('/', fn() => view('home'))->name('home');

Route::get('/logout', function(){

})->name('logout');

// Route::prefix('/input')->controller(InputController::class)->group(function (){
    // Route::get('/hello','hello');
// });
Route::group(['prefix'=>'finance'], function(){
    Route::get('/', fn() => view('finance'))->name('finance');
    Route::get('/categories', fn() => view('finance'))->name('finance.categories');
    Route::get('/presets', fn() => view('finance'))->name('finance.presets');
});

Route::group(['prefix'=>'exercise'], function(){
    Route::get('/', fn() => view('exercise'))->name('exercise');
    Route::get('/categories', fn() => view('exercise'))->name('exercise.categories');
    Route::get('/presets', fn() => view('exercise'))->name('exercise.presets');
});

Route::group(['prefix'=>'book'], function(){
    Route::get('/', fn() => view('book'))->name('book');
    Route::get('/categories', fn() => view('book'))->name('book.categories');
    Route::get('/presets', fn() => view('book'))->name('book.presets');
});

Route::group(['prefix'=>'movie'], function(){
    Route::get('/', fn() => view('movie'))->name('movie');
    Route::get('/categories', fn() => view('movie'))->name('movie.categories');
    Route::get('/presets', fn() => view('movie'))->name('movie.presets');
});

Route::group(['prefix'=>'series'], function(){
    Route::get('/', fn() => view('series'))->name('series');
    Route::get('/categories', fn() => view('series'))->name('series.categories');
    Route::get('/presets', fn() => view('series'))->name('series.presets');
});



