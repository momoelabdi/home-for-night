<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\UserController;
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

// index 
Route::get('/', [ListingsController::class, 'index']);

// Show create form
Route::get('/listing/create', [ListingsController::class, 'create']);

// show registration form
Route::get('/register', [UserController::class, 'create' ]);

// store creations
Route::post('/listings', [ListingsController::class, 'store']);


// create new user
Route::post('/users', [UserController::class, 'store']);


// Show single item  
Route::get('/item/{listing}', [ListingsController::class, 'show']);

