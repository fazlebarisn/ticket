<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comments = Comment::all();
    return view('welcome' , compact('comments') );
});
