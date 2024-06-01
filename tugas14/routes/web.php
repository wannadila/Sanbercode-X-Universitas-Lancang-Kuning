<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController ::class,'home']);

Route::get('/register', [AuthController::class,'register']);

Route::POST('/welcome', [AuthController::class,'welcome']);

Route::get('/data-tables', function() {
    return view('page.data-tables');
});
Route::get('/table', function() {
    return view('page.table');
});

Route::resource('cast', CastController::class);

