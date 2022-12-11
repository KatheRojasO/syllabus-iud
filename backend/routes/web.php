<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'actionEdit'])->name('user.action.edit');
Route::put('/user/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::post('/course', [CourseController::class, 'store'])->name('course.store');
Route::get('/couse/edit/{id}', [CourseController::class, 'actionEdit'])->name('course.action.edit');
Route::put('/course/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::delete('/course/{id}', [CourseController::class, 'destroy'])->name('course.delete');