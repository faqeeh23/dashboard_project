<?php

use App\Http\Controllers\LecturersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home_page');
});

Route::get('/lecturers', [LecturersController::class,'index'])->name('allLucturers');
