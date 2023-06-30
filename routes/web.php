<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//all listing
Route::get('/', [ListingController::class, 'index']);


//show create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data
Route::post('/listings', [ListingController::class, 'store']);

//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delte listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//show sign up form
Route::get('/register', [UserController::class, 'create']);

//create user
Route::post('/users', [UserController::class, 'store']);

//log user out
Route::post('/logout', [UserController::class, 'logout']);

//show login form
Route::get('/login', [UserController::class,'login']);

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);