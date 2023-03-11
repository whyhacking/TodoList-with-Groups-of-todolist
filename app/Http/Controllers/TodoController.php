<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    
    public function index(){
        $todos = Todo::all();
        return view('todolist.index')->with(['todos' => $todos]);
    }

    public function create(){
        return view('todolist.create');
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);

         $todo = $request->title;
         Todo::create(['title' => $todo ]);
         return redirect()->back()->with('success',"Todo created Succesfully!");
    }
    public function edit(){
        return "hii";
    }



}
