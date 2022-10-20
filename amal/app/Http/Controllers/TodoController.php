<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::get();

        return view('index', [
            'todo' => $todo
        ]);
    }
    public function store(request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();
        return back();
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back();
    }
}
