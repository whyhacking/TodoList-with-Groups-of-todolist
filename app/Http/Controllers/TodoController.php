<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    
    public function index(){
        $todos = Todo::orderBy('group')->get();
        $max=Todo::max('group')+1;
        return view('todolist.index',compact('todos','max'));
    }

    public function create(){
        return view('todolist.create');
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
         $grp = $request->group + 1; 
         $todo = $request->title;
         Todo::create(['title' => $todo, 'group' => $grp ]);
         return redirect('/index')->with('success',"Todo created Succesfully!");
    }
    public function edit($id){
        $todo =Todo::find($id);
        return view('todolist.edit')->with(['id' =>$id, 'todo' => $todo]);
    }

    public function modify(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
         $modifyTodo = Todo::find($request->id);
         $modifyTodo->update(['title' => $request->title]);

        return redirect('/index')->with('success',"Todo edited Succesfully!");
    }
    public function grouplist($group){
        
        $fgroup = Todo::where('group', $group)->first();
        $rgroups = Todo::where('group', $group)->get();
       
        return view('todolist.grouplist', compact('fgroup','rgroups'));
    }
    public function groupmodify(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $modifyname = $request->title;
        $modifygrp = $request->group;
        Todo::create(['title' => $modifyname, 'group' => $modifygrp]);
        return redirect('/' . $modifygrp . '/grouplist')->with('success',"Todo created Succesfully!");

    }

    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success',"Todo marked as incompleted!");
        }else {
            $todo->update(['completed' => True]);
            return redirect()->back()->with('success',"Todo marked as completed!");
        }    
    }
    public function delete($id){
       $todo = Todo::find($id);   
       $todo->delete();
        
       return redirect()->back()->with('success',"Todo deleted Successfully!");
           
    }
    public function deletegrp($group){
        $todo = Todo::where('group',$group)->delete();   
        //$todo->delete();
        
        return redirect()->back()->with('success',"Todo deleted Successfully!");
            
     }
}
