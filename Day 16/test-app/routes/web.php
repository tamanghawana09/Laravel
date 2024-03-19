<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $is_expired = true;
    $news = [
        'petrol price drop',
        'sarkar change',
        'rinjha is maida',
        'coronavirus pandemic',
        'covid-19',
        'AI is emerging',
        'Devin is introduced',
        'Deepak Khadka beats other faculty with 3.9 GPA',
        'Deepak Sir is gunda of KIST',
        'MIS teacher nai Math sir jasto absent nabhaye paxi kosko bishwas garne'
    ];
    $title = "Basi Khabar";
    
    return view('welcome',[
        "title" => $title,
        "news" => $news,
        "is_expired" => $is_expired
    ]);
    
});
Route::get('/news/{id}',function($id){
     return response($id);

     //for dynamic code but not working
    // return view('welcome',[
    //     "id" => $id,
    // ]);
});