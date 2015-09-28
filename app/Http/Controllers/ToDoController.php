<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        // DB::enableQueryLog();
        $toDos = ToDo::all();
        // $queries = DB::getQueryLog();
        // $last_query = end($queries);
        // dd($last_query);
        return view('todos.index')
            ->with('toDos', $toDos);
    }

}
