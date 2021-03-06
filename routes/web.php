<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/shopinfo', [App\Http\Controllers\HomeController::class, 'shopinfo'])->name('shopinfo');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contact-us');
Route::get('/franchise', [App\Http\Controllers\HomeController::class, 'franchise'])->name('franchise');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

// Admin
Route::middleware(['auth'])
    ->namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('ajaxSwitchStatus', [App\Http\Controllers\Admin\InstagramController::class, 'ajaxSwitchStatus'])->name('ajaxSwitchStatus');
        Route::get('ajaxGetInstagramData', [App\Http\Controllers\Admin\InstagramController::class, 'ajaxGetInstagramData'])->name('ajaxGetInstagramData');
        Route::resource('instagram', '\App\Http\Controllers\Admin\InstagramController');
    });
