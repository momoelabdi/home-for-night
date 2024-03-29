<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\ReservationsController;
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
Route::get('/listing/create', [ListingsController::class, 'create'])->middleware('auth');

//store reservations
Route::post('/reservations', [ReservationsController::class, 'store'])->middleware('auth');

//delete reservations
Route::delete('/reservations/{reservation}', [ReservationsController::class, 'destroy'])->middleware('auth');

//manage reservations
Route::get('/reservations/manage', [ReservationsController::class, 'manage'])->middleware('auth');

// store listings
Route::post('/listings', [ListingsController::class, 'store'])->middleware('auth');

// show registration form 'route  replaced with Model'
// Route::get('/register', [UserController::class, 'create' ]);

//show edit form of item
Route::get('/listing/{listing}/edit', [ListingsController::class, 'edit'])->middleware('auth');

//Update
Route::put('/listings/{listing}', [ListingsController::class, 'update'])->middleware('auth');

// update Status
Route::put('/listings/{listing}/status', [ListingsController::class, 'status'])->middleware('auth');

// delete item
Route::delete('/listings/{listing}', [ListingsController::class, 'destroy'])->middleware('auth');

//manage items

Route::get('/listings/manage', [ListingsController::class, 'manage'])->middleware('auth');

// logout
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

// create new user
Route::post('/users', [UserController::class, 'store'])
    ->name('login')
    ->middleware();

// Show single item
Route::get('/host/{listing}', [ListingsController::class, 'show']);

Route::fallback(function () {  abort(404);});

// get login form. 'route  replaced with Model'
// Route::get('/', [UserController::class, 'login']);

//autenticate user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/auth/google', [UserController::class, 'redirect'])->name("google-auth");

Route::get('/auth/google/callback', [UserController::class, 'callBackGoogle']);

   
