<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmProjectEnquiryController;
use App\Http\Controllers\KrunkoContactController;

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
Route::view('/krunko/about-us', 'krunko.about-us')
    ->name('krunko.about-us');


Route::post('/retailer/enquiry',
    [FarmProjectEnquiryController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('farm.enquiry.store');

    
/*
| KRUNKO Enquiry Cart Routes
|--------------------------------------------------------------------------
| No database and no payment gateway.
*/

use App\Http\Controllers\KrunkoEnquiryController;

// Get cart products
Route::get('/krunko/enquiry-cart',
    [KrunkoEnquiryController::class, 'cart']
)->name('krunko.cart');

// Add product to cart
Route::post('/krunko/enquiry-cart/add',
    [KrunkoEnquiryController::class, 'add']
)->name('krunko.cart.add');

// Update product quantity
Route::patch('/krunko/enquiry-cart/update',
    [KrunkoEnquiryController::class, 'update']
)->name('krunko.cart.update');

// Remove product from cart
Route::delete('/krunko/enquiry-cart/remove',
    [KrunkoEnquiryController::class, 'remove']
)->name('krunko.cart.remove');

// Send enquiry to company email
Route::post('/krunko/send-enquiry',
    [KrunkoEnquiryController::class, 'submit']
)->middleware('throttle:5,1')
  ->name('krunko.enquiry.submit');



  Route::view('/krunko/shop', 'krunko.shop')
    ->name('krunko.shop');



use App\Http\Controllers\KrunkoProductController;

Route::get('/krunko/product/{slug}',
    [KrunkoProductController::class, 'show']
)->where('slug', '[a-z0-9-]+')
 ->name('krunko.product.show');


 Route::view('/krunko/contact', 'krunko.contact')
    ->name('krunko.contact');

Route::post('/krunko/contact', [KrunkoContactController::class, 'send'])
    ->middleware('throttle:5,1')
    ->name('krunko.contact.send');