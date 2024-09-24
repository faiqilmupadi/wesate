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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.login', ['title' => 'Login']);
})->name('login');


Route::get('monitoring', function () {
    return view('menu.monitoring', ['title' => 'Monitoring']);
})->name('monitoring');

Route::get('mahasiswa', function () {
    return view('dashboard.mahasiswa', ['title' => 'Mahasiswa']);
})->name('mahasiswa');

Route::get('ketuaprogramstudi', function () {
    return view('dashboard.ketuaprogramstudi', ['title' => 'ketuaprogramstudi']);
})->name('ketuaprogramstudi');


// Route::get('/dashboard/mahasiswa', [UserController::class, 'mahasiswa'])->name('mahasiswa');
// Route::get('/dashboard/kaprodi', [UserController::class, 'kaprodi'])->name('kaprodi');


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
