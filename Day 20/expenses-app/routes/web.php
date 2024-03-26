<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ExpenseController::class , 'index'])->name('expense.home');

Route::get('/create', [ExpenseController::class , 'displayCreateForm'])->name('expense.create');
Route::post('/store', [ExpenseController::class , 'store'])->name('expense.store');

Route::get('/edit',[ExpenseController::class ,'displayEditForm'])->name('expense.edit');
