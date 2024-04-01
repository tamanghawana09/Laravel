<?php

namespace App\Http\Controllers;
use App\Models\Expense;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public static function index(){
        return view ('welcome');
    }
    public static function displayCreateForm(){
        return view ('create');
    }
 
  
}
