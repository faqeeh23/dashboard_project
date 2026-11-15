<?php

use App\Http\Controllers\LecturersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home_page');
});
Route::resource('/lecturers', LecturersController::class);
