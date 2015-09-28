<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ToDo;
use App\Http\Requests\ToDoRequest;

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

    public function create()
    {
        $toDo = new ToDo;

        return view('todos.create')
            ->with('toDo', $toDo);
    }

    public function store(ToDoRequest $request)
    {
        $toDo = new ToDo;
        $toDo->name = $request->get('name');
        $toDo->description = $request->get('description');
        $toDo->save();

        return redirect(route('todos.index'))
                ->with('flash_success', 'To Do created successfully.');
    }
}
