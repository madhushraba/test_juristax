<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;  
use App\Http\Controllers\UserEnquiryController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';  
 
Route::get('/users', [RouteController::class, 'users'])->name('users');

Route::get('/home', [RouteController::class, 'home'])->name('home');

// Route::get('/catlist', [RouteController::class, 'catlist'])->name('catlist');


Route::get('/contactform', [ContactController::class, 'contactform'])->name('contactform'); 
Route::post('/contactform', [ContactController::class, 'store'])->name('contactform'); 
Route::get('/contacttable', [ContactController::class, 'contacttable'])->name('contact_table');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial'); 
Route::post('/testimonial', [TestimonialController::class, 'store'])->name('add_testimonial');
Route::get('/show_testimonial', [TestimonialController::class, 'show'])->name('show_testimonial');

// Route::get('/addcat', [RouteController::class, 'addcat'])->name('addcat');
// Route::post('/addcat', [RouteController::class, 'storeCategory'])->name('storeCategory');
// Route::get('/catlist', [RouteController::class, 'catlist'])->name('catlist');

Route::get('/addcat', [CategoryController::class, 'index'])->name('addcat');
Route::post('/addcat', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/catlist', [CategoryController::class, 'show'])->name('catlist');



Route::get('/enquiry', [UserEnquiryController::class, 'index'])->name('enquiry.form');
Route::post('/enquiry', [UserEnquiryController::class, 'store'])->name('store.enquiry');

Route::get('/showenquiry', [UserEnquiryController::class, 'showenquiry'])->name('showenquiry');


// Route::get('/enquiry', 'UserEnquiryController@index')->name('enquiry.form');
// Route::post('/enquiry', 'UserEnquiryController@store')->name('store.enquiry');






// Route::get('/addcat', 'YourController@addcat')->name('pages.Addcat');


// Route::get('/page1', function () {
//     return view('pages.Page1');
// })->name('page1');
// Route::get('/page1', 'RouteController@index')->name('page1');





