<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    $users = User::with('image')->get()->toArray();
    dd($users);
});

Route::get('/post', function(){
    $posts = Post::with('image')->get()->toArray();
    dd($posts);
});
