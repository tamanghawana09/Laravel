<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/store', function (Request $req) {
   $validData = $req->validate([
        'email' => 'required',
        'username' => 'required',
        'password' => 'required',
   ]);

   User::create($validData);
   return response('working working good job');
});
