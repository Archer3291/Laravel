<?php

use App\Http\Controllers\postController;
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

Route::view('/', 'welcome')->name('home');
Route::get('/blog', [postController::class, 'index'])->name('posts.index');


Route::get('/calidad', [postController::class, 'calidad'])->name('Calidad');
Route::get('/produccion', [postController::class, 'produccion'])->name('Producción');
Route::get('/supervisor', [postController::class, 'supervisor'])->name('Supervisor');
Route::get('/sistemas', [postController::class, 'sistemas'])->name('Sistemas');
Route::get('/rh', [postController::class, 'rh'])->name('Recursos humanos');


Route::get('/blog/create', [postController::class, 'create'])->name('create');
Route::post('/blog', [postController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [postController::class, 'show'])->name('posts.show');
