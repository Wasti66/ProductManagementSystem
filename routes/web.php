<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ProductController;

Route::post('/create',[ProductController::class,'create']);
Route::get('/read',[ProductController::class,'read']);
Route::post('/update/{id}',[ProductController::class,'update']);
Route::post('delete/{id}',[ProductController::class,'delete']);
