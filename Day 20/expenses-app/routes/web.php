<?php

use App\Http\Controllers\ExpenseController;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    $data = Expense::all();
    return view('welcome',['expenses' =>$data]);
});

Route::get('/create', [ExpenseController::class , 'displayCreateForm'])->name('expense.create');
// Route::post('/store', [ExpenseController::class , 'store'])->name('expense.store');

Route::post('/submit-form', function (Request $req) {
    
    $title = $req->title;
    $amount = $req->amount;
    $category = $req->category;
  
    $exp = new Expense();
    $exp->title = $title;
    $exp->amount = $amount;
    $exp->category = $category;
    //POST REQUEST
    $exp->save();
  
    return redirect('/');
  });


Route::get('/edit/{id}', function ($id) {
  $data =  Expense::find($id);

  return view('edit', ['data' => $data]);
});

Route::post('/update/{id}', function ($id, Request $req) {
  $data =  Expense::find($id);
 
  $data->title = $req->title;
  $data->amount = $req->amount;
  $data->category = $req->category;
  $data->update();

  return redirect('/');
});


Route::get('/delete/{id}', function ($id) {
  $data =  Expense::find($id);
  $data->delete();

  return redirect('/');
});