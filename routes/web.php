<?php

use Illuminate\Support\Facades\Route;

Route::get('/shdvchgsd', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');
});
Route::view('/the-farm-project', 'retailer')->name('retailer');

Route::view('/krunkoo', 'krunko.customer')->name('krunko.customer');

Route::view('/krunko/ourstory', 'krunko.our-story')
    ->name('krunko.our-story');

