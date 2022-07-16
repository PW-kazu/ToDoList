<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListConteroller extends Controller
{
    public function index()

    $item = [
        'content' => 'ToDoList',
    ];

    return view('index',$iten)
}
