<?php

use App\Models\Listing;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Passing a lot of parameters to view page, which can seen in the front page.

// Find all
Route::get('/', [ListingController::class, 'index']);

// Create listings
Route::get('/listings/create', [ListingController::class,'create']);

// Display Single post
Route::get('/listings/{listing}', [ListingController::class,'show']);