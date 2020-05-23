<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\ToDo;

class ToDoController extends Controller
{
    public function home()
    {
        return view('todos.home');
    }

    public function index()
    {
        $todos = (new ToDo())->latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(ToDoRequest $request)
    {
        $todo = (new ToDo($request->all()));
        $todo->save();

        return redirect(route('todos.index'));
    }


    public function edit(ToDo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    public function show(ToDo $todo)
    {

        return view('todos.show', compact('todo'));
    }

    public function completed(ToDo $todo)
    {
        $todo->update([
            'completed' => !$todo->completed
        ]);

        return redirect()->back();
    }

    public function destroy(ToDo $todo)
    {
        $todo->delete();

        return redirect(route('todos.index'));
    }

    public function update(ToDo $todo, ToDoRequest $request){

        $todo->update($request->all());

        return redirect()->route('todos.show',compact('todo'));
    }

}
