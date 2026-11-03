<?php

use Illuminate\Support\Facades\Route;

Route::get('/shdvchgsd', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');
});
Route::view('/the-farm-project', 'retailer')->name('retailer');

Route::view('/krunko', 'krunko.customer')->name('krunko.customer');


