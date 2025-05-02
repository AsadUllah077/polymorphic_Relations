<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    $users = User::with('image')->get()->toArray();
    dd($users);
});
