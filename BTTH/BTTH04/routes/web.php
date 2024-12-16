<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\issuesController;

Route::get('/', [issuesController::class,'index'])->name('index');
Route::get('/create', [issuesController::class,'create'])->name('create');
Route::get('/edit/{id}', [issuesController::class,'edit'])->name('edit');
Route::put('/update/{id}', [issuesController::class,'update'])->name('update');

Route::delete('/destroy/{id}', [issuesController::class,'destroy'])->name('destroy');
Route::post('/store', [issuesController::class,'store'])->name('store');

