<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontpage');
});

use App\Http\Controllers\WelcomeController;

Route::get('/Frontpage', [WelcomeController::class, 'Hello']);
Route::get('/nextpage', [WelcomeController::class, 'Next']);
Route::get('/Page2', [WelcomeController::class, 'Page2']);
Route::get('/Page3', [WelcomeController::class, 'Page3']);