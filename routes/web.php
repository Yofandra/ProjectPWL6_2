<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homee', [App\Http\Controllers\HomeeController::class, 'homee'])->name('homee');
Route::get('/profile/{name}', [App\Http\Controllers\ProfileController::class, 'profile']);
Route::get('/student/{id}', [App\Http\Controllers\PostController::class, 'index'])->name('student');
Route::get('/kuliah', [App\Http\Controllers\KuliahController::class, 'kuliah'])->name('kuliah');
