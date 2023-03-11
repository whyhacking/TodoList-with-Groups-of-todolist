<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    
    public function index(){
        return "hii";
    }

    public function create(){
        return view('todolist.create');
    }

    public function update(Request $request){

         $todo = $request->title;
         Todo::create(['title' => $todo ]);
         return redirect()->back()->with('success',"Todo created Succesfully!");
    }
    public function edit(){
        return "hii";
    }



}
