<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoList;


Route::get('/', [ToDoList::class,'index']);
