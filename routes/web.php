<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome to the homepages";
});

Route::get("/posts", function () {
    return "aqui se mostraran todos el posts ";
});

Route::get("/posts/create", function () {
    return "aqui se mostrara un formulario para crear un post"; 
});

Route::get("/posts/{post}", function ($post) {
    return "aqui se mostraran el post {$post}";
});


/*Route::get("/posts/{post}/{category}", function ($post, $category) {
    return "aqui se mostraran los post {$post} de la categoria {$category}";
}); */

//get
//post
//patch
//delete
//