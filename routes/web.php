<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PagesController;
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


// Localization route
Route::get('/locale', [LocalizationController::class, 'setLang'])->name('localization');
// Pages' routes
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/medservices', [PagesController::class, 'medservices'])->name('medservices');
Route::get('/nomedservices', [PagesController::class, 'nomedservices'])->name('nomedservices');
Route::get('/worksystem', [PagesController::class, 'worksystem'])->name('worksystem');
Route::get('/countries', [PagesController::class, 'countries'])->name('countries');
Route::get('/partners', [PagesController::class, 'partners'])->name('partners');
Route::get('/reviews', [PagesController::class, 'reviews'])->name('reviews');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');