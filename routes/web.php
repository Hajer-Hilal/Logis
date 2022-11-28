<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\GetAQuoteController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.view');
Route::get('/about', [AboutController::class, 'index'])->name('about.view');
Route::get('/Service', [ServicesController::class, 'index'])->name('Service.view.all');
Route::get('/service-details/{id}', [ServicesController::class, 'read'])->name('Service.view.single');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.view');
Route::get('/Contact', [ContactController::class, 'index'])->name('Contact.view');
Route::get('/Quote', [GetAQuoteController::class, 'index'])->name('Quote.view');
