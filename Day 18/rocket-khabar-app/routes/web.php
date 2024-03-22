<?php

use App\Http\Controllers\khabarController;
use Illuminate\Support\Facades\Route;


Route::get('/',[khabarController::class ,'index']);

Route::get('/display',[khabarController::class,'displayName']);

