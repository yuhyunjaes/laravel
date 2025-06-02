<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::post('/register', [IndexController::class, 'register'])->name('register');

Route::post('/login', [IndexController::class, 'login'])->name('login');

Route::post('/logout', [IndexController::class, 'logout'])->name('logout');