<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;


//first approach
// Route::get('/', function () {
//     //Calling the controller function

    
//     $obj = new articleController();
//     return $obj->index();
// });

Route::get('/',[articleController::class , 'index']);

Route::get('/news/{id}',[articleController::class, 'news']);
