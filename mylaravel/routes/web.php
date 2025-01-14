<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;


Route::get('/mycontroller', 
    [MyController::class, 'myFunction']);

Route::post('/mycontroller', 
    [MyController::class, 'showTable']);
    
Route::get('/mycontroller/{id?}', 
    [MyController::class, 'myFunction']);

Route::post('/mycontroller/{id?}', 
    [MyController::class, 'myFunction']);

Route::get('/', function () {
    return view('welcome');
});
Route ::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello World!</h1>";
});