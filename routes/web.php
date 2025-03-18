<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingEstimateController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\trackPayController;
use App\Http\Controllers\SlideController;


// Sildes
Route::get('/slides', [SlideController::class, 'index'])->name('slides');

Route::post('/track-order', [trackPayController::class, 'trackOrder'])->name ('track-order');
 //Payment Process
 Route::post('/pay-now', [trackPayController::class, 'payNow'])->name('paypal.pay');
 Route::get('/payment-success', [trackPayController::class, 'paymentSuccess'])->name('paypal.success');
 Route::get('/payment-cancel', [trackPayController::class, 'paymentCancel'])->name('paypal.cancel');

// tracking
Route::get('/track', function () {
    return view('track');
})->name('track');
// Static pages
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/signup', [SignupController::class, 'signupForm'])->name('signup.form');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup');

Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard')->middleware('auth');
Route::get('/contacts_user', [ClientsController::class, 'index1'])->name('contacts_user')->middleware('auth');
Route::get('/active_users', [ClientsController::class, 'countUsers'])->name('active_users')->middleware('auth');
 


Route::get('/contact', [ContactFormController::class, 'show'])->name('contact');

// Custom routes for sections
Route::get('/about-us', function () {
    return redirect()->route('index')->withFragment('about-us');
})->name('about-us');

Route::get('/our-services', function () {
    return redirect()->route('index')->withFragment('our-services');
})->name('our-services');

Route::get('/why-us', function () {
    return redirect()->route('index')->withFragment('why-us');
})->name('why-us');

// Form submissions
Route::post('/shipping-estimate', [ShippingEstimateController::class, 'store'])->name('shipping.estimate');
Route::get('/shippingform', function () {
    return view('shippingform');
})->name('shippingform')->middleware('auth');


Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.form');

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::get('/shipping-estimate/{id}/edit', [DashboardController::class, 'edit'])->name('shipping-estimate.edit');

    Route::patch('/update-estimate/{id}', [DashboardController::class, 'update'])->name('update-estimate');

    Route::get('/edit-estimate/{id}', [DashboardController::class, 'edit'])->name('edit-estimate');

    // Route::get('/contacts_user', function () {
    //     return view('contacts_user');
    // })->name('contacts_user'); 
    

    Route::delete('/shipping-estimate/{id}', [DashboardController::class, 'destroy'])->name('shipping.estimate.destroy');
    Route::get('/contacts', [ClientsController::class, 'index'])->name('contacts.index');
    Route::delete('/contacts/{id}', [ClientsController::class, 'destroy'])->name('contacts.destroy');

});