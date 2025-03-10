<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [AuthManager::class, 'index'])->name('home');

Route::get('/view/hi', function () {
    return view('post.View');
}) ;



Route::get("/", [AuthManager::class, "login"])->name("login");

Route::get("/register", [AuthManager::class, "register"])->name("register");

Route::post("/register", [AuthManager::class, "registerPost"])->name("register.post");

Route::post("login", [AuthManager::class, "loginPost"])->name("login.post");

Route::get("logout", [AuthManager::class, "logout"])->name("logout");


Route::get('/create', [PostController::class, "create"])->name("create");

Route::post('/creat/new', [PostController::class, " createPost"])->name("create.Post");


Route::get('/posts/view/{id}', [PostController::class, 'view'])->name('view.post');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

Route::post('/update/{id}', [PostController::class, 'update'])->name('update.post');

Route::delete('/student/{id}', [PostController::class, 'delete'])->name('post.delete');


