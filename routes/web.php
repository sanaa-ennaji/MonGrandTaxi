<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/ERROR404', function () {
    return view('404');
});
Route::get('/driver', function () {
    return view('driver');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/registerD', [UserController::class, 'registerDriver']);
Route::post('/registerP', [UserController::class, 'registerPassanger']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);