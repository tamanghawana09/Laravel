<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public static function index(){
        return view ('welcome');
    }
    public static function displayCreateForm(){
        return view ('create');
    }
    public static function displayEditForm(){
        return view ('edit');
    }
    public static function store(Request $req){
        dd($req);
    }
}
