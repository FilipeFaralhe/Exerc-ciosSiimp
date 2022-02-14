<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/exercises1', [\App\Http\Controllers\Exercises1::class, 'index'])->name('exercises1.index');
Route::post('/exercises1', [\App\Http\Controllers\Exercises1::class, 'store'])->name('exercises1.store');

Route::get('/exercises2', [\App\Http\Controllers\Exercises2::class, 'index'])->name('exercises2.index');
Route::post('/exercises2', [\App\Http\Controllers\Exercises2::class, 'store'])->name('exercises2.store');

Route::get('/exercises3', [\App\Http\Controllers\Exercises3::class, 'index'])->name('exercises3.index');
Route::post('/exercises3', [\App\Http\Controllers\Exercises3::class, 'store'])->name('exercises3.store');

Route::get('/exercises4', [\App\Http\Controllers\Exercises4::class, 'index'])->name('exercises4.index');
Route::post('/exercises4', [\App\Http\Controllers\Exercises4::class, 'store'])->name('exercises4.store');

Route::get('/exercises5', [\App\Http\Controllers\Exercises5::class, 'index'])->name('exercises5.index');
Route::post('/exercises5', [\App\Http\Controllers\Exercises5::class, 'store'])->name('exercises5.store');

Route::get('/exercises6', [\App\Http\Controllers\Exercises6::class, 'index'])->name('exercises6.index');
Route::post('/exercises6', [\App\Http\Controllers\Exercises6::class, 'store'])->name('exercises6.store');

Route::get('/exercises7', [\App\Http\Controllers\Exercises7::class, 'index'])->name('exercises7.index');
Route::post('/exercises7', [\App\Http\Controllers\Exercises7::class, 'store'])->name('exercises7.store');
