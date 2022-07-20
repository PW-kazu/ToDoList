<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListConteroller extends Controller
{
    public function index()
    {
        $item = [
            'txt' => 'Todo List',
            'param' => $request -> param,
    ];
        return view('index',$item);
    }

    public function create()
    {
        
    }
}


