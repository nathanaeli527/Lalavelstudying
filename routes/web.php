<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\petsonController;
use App\Http\Controllers\gita;

Route::get('/',[petsonController::class,'index'])->name('home.index');
Route::get('/contact',[petsonController::class,'contact'])->name('home.contact');
Route::get('/contactus',[petsonController::class,'contactus'])->name('home.contactus');
Route::resource('guiters',gita::class);



