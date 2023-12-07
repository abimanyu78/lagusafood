<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/kesehatan', function () {
    return "Bersihkan paru paru dengan tidak merokok";
});

Route::get('/hello', function () {
    return "Hello Cuyy!";
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/..', function () {
    return view('home/index');
});

Route::resource('/blog', \App\Http\Controllers\BlogController::class);

Route::get('/user', function(){
    return view('blog.user');
});

Route::get('/', [\App\Http\Controllers\BlogController::class,'home']);

Route::get('/tampil', [\App\Http\Controllers\BlogController::class, 'tampil']);

Route::get('/search', [\App\Http\Controllers\BlogController::class, 'search']);

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin', [BlogController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


