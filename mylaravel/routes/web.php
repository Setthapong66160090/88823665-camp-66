<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/register',
    [RegisterController::class, 'index']);

Route::get('/home',
    [HomeController::class, 'index']);

Route::get('/',
    [HomeController::class, 'index']);
Route::get('/mycontroller',
    [MyController::class, 'myFunction']);

Route::post('/register',
    [RegisterController::class, 'create']);

Route::get('/500', function () {
    abort(500);
    });
Route::get('/users',
    [UserController::class, 'index']);

Route::get('/user/{id}',
    [UserController::class, 'edit']);

Route::put('/user',
    [UserController::class, 'edit_action']);

Route::delete('/user',
    [UserController::class, 'delete']);

Route::post('/mycontroller',
    [MyController::class, 'showTable']);

Route::get('/mycontroller/{id?}',
    [MyController::class, 'myFunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class, 'myFunction']);

Route::get('/', function () {
    return view('home');
});
Route ::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello World!</h1>";
});

Route::get('/test-500', function () {
    abort(500);
});

