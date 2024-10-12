<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KetuaProgramStudiController;
use App\Http\Controllers\BagianAkademikController;
use App\Models\BagianAkademik;

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

Route::get('mahasiswa', function () {
    return view('mahasiswa.dashboard', ['title' => 'Mahasiswa']);
})->name('mahasiswa');

Route::get('ketuaprogramstudi', function () {
    return view('ketuaprogramstudi.dashboard', ['title' => 'ketuaprogramstudi']);
})->name('ketuaprogramstudi');

Route::get('dekan', function () {
    return view('dekan.dashboard', ['title' => 'dekan']);
})->name('dekan');

Route::get('bagianakademik', function () {
    return view('bagianakademik.dashboard', ['title' => 'bagianakademik']);
})->name('bagianakademik');

Route::get('pembimbingakademik', function () {
    return view('pembimbingakademik.dashboard', ['title' => 'pembimbingakademik']);
})->name('pembimbingakademik');

Route::get('pemilihanrole', function () {
    return view('user.pemilihanrole', ['title' => 'pemilihanrole']);
})->name('pemilihanrole');

Route::get('memilihmatakuliah', function () {
    return view('ketuaprogramstudi.memilihmatakuliah', ['title' => 'memilihmatakuliah']);
})->name('memilihmatakuliah');

Route::get('penyusunanruang', function () {
    return view('bagianakademik.penyusunanruang', ['title' => 'penyusunanruang']);
})->name('penyusunanruang');

Route::get('/penyusunanruang', [BagianAkademikController::class, 'create'])->name('penyusunanruang.create');
Route::post('/penyusunanruang', [BagianAkademikController::class, 'store'])->name('penyusunanruang.store');

Route::post('pemilihanrole', [UserController::class, 'handleRoleSelection'])->name('handleRoleSelection');
// Route::get('/dashboard/mahasiswa', [UserController::class, 'mahasiswa'])->name('mahasiswa');
// Route::get('/dashboard/kaprodi', [UserController::class, 'kaprodi'])->name('kaprodi');


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('memilihmatakuliah', [KetuaProgramStudiController::class, 'create'])->name('memilihmatakuliah.create');
Route::post('memilihmatakuliah', [KetuaProgramStudiController::class, 'store'])->name('memilihmatakuliah.store');
Route::get('memilihmatakuliah/{kode_mk}', [KetuaProgramStudiController::class, 'show'])->name('memilihmatakuliah.show');
Route::get('memilihmatakuliah/{id}/edit', [KetuaProgramStudiController::class, 'edit'])->name('memilihmatakuliah.edit');
Route::put('memilihmatakuliah/{id}', [KetuaProgramStudiController::class, 'update'])->name('memilihmatakuliah.update');
Route::delete('memilihmatakuliah/{id}', [KetuaProgramStudiController::class, 'destroy'])->name('memilihmatakuliah.destroy');