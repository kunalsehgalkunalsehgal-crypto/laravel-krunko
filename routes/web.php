<?php

use Illuminate\Support\Facades\Route;

Route::get('/shdvchgsd', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');
});
Route::view('/retailer', 'retailer')->name('retailer');