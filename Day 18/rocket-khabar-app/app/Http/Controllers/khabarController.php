<?php

namespace App\Http\Controllers;

use App\Models\Hawana;
use Illuminate\Http\Request;

class khabarController extends Controller
{
    public static function index(){
        return view('welcome' , ['name' => Hawana::all()]);
    }
    public static function displayName(){
        return view('display',['name' => 'Hawana Tamang', 'caste' => 'Tamang']);

    }
}
