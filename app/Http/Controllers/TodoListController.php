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

    public function post(Requset $request)
    {
        $validate_rule = [
            'content' => 'required',
        ];

        $this -> validate($request, $validate_rule);
    }

    public function add()
    {
        return view('add');
    }

    public function create(ToDoListRequest $request)
    {
         $form = $request->all();
        unset($form['_token']);
        ToDoList::where('id', $request->id)->update($form);
        return redirect('/');
    }
}


