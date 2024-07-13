<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Html;

Route::get('/', function () {
    return view('welcome');
});


Route::get('hello',[HelloController::class, 'index']);
Route::post('hello',[HelloController::class, 'post']);

