@extends('layouts.app')
@section('content')
    <h2>Tasks</h2>


     <a href="/tasks/create"  class="btn btn-primary">Create New Task</a><br><br>
     <ul>
    @foreach ($tasks as $task) 
    
    <li>
    {{$post->id}} 
    </li>
    @endforeach 
    </ul>
          
 @endsection
