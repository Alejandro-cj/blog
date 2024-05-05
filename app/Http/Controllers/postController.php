<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        return "Aqui se mostraran todoslos post";
    }

    public function create(){
        return "aqui se mostrara un formulario para crear un post"; 
    }

    public function show($post){
        return "aqui se mostraran el post {$post}";
    }

}
