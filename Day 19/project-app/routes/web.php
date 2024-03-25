<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $post = new Post();
    $post->title ="test";
    $post->save();

    // $post = Post::all();
    // dd($post);
    return view('welcome');
});
