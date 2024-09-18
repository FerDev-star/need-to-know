<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

Route::view('/', 'admin.login')->name('login.page');
Route::view('/register', 'register')->name('register.page');
Route::post('/register/user', [UserController::class, 'register'])->name('register.user');
Route::get('/admin', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('admin')->group(function () {
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/knowledge/create', [KnowledgeController::class, 'create'])->name('knowledge.create');
    Route::post('/admin/knowledge/store', [KnowledgeController::class, 'store'])->name('knowledge.store');
    Route::get('/admin/knowledge/destroy/{id}', [KnowledgeController::class, 'destroy'])->name('knowledge.destroy');
    Route::get('/admin/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/admin/tag/store', [TagController::class, 'store'])->name('tag.store');    
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/search', [UserController::class, 'search'])->name('user.search');