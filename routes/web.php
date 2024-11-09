<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'product'])->name('index');
Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/create',[ProductController::class,'store'])->name('create.submit');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[ProductController::class,'update'])->name('edit.update');
Route::post('/delete/{id}',[ProductController::class,'delete'])->name('destroy');
