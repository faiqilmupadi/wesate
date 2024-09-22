<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SateController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.login', ['title' => 'Login']);
})->name('login');

Route::get('home', function () {
    return view('frontend.home', ['title' => 'Home']);
})->name('home');

Route::get('monitoring', function () {
    return view('frontend.monitoring', ['title' => 'Monitoring']);
})->name('monitoring');


Route::get('register', [SateController::class, 'register'])->name('register');
Route::post('register', [SateController::class, 'register_action'])->name('register.action');
Route::get('login', [SateController::class, 'login'])->name('login');
Route::post('login', [SateController::class, 'login_action'])->name('login.action');
Route::get('password', [SateController::class, 'password'])->name('password');
Route::post('password', [SateController::class, 'password_action'])->name('password.action');
Route::get('logout', [SateController::class, 'logout'])->name('logout');
