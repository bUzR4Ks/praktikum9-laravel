<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ThemeController::class, 'index']);
Route::get('/theme/{theme}', [ThemeController::class, 'setTheme']);