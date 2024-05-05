<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;

Route::get('/', HomeController::class,);

Route::get('/posts', [postController::class,'index']);
Route::get("/posts/create", [PostController::class,"create"]);
Route::get("/posts/{post}", [PostController::class,"show"]);


/*  Route::get("/posts/{post}/{category}", function ($post, $category) {
     return "aqui se mostraran los post {$post} de la categoria {$category}";
}); */

//get
//post
//patch
//delete
//