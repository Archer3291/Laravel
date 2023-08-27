<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
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

Route::get('/calidad', [postController::class, 'calidad'])->name('Calidad');
Route::get('/produccion', [postController::class, 'produccion'])->name('Producción');
Route::get('/supervisor', [postController::class, 'supervisor'])->name('Supervisor');
Route::get('/sistemas', [postController::class, 'sistemas'])->name('Sistemas');
Route::get('/rh', [postController::class, 'rh'])->name('Recursos humanos');
Route::view('/profile', 'posts.profile')->name('perfil');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
