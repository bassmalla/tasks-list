<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){ 
        $tasks = Task::all();
        return view('tasks.index',[
            'tasks' => $tasks
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        Task::create([
            'name' => $request->name,
        ]);
        
       return redirect(route('tasks.index')); 
    }
}
