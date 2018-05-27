@extends('layouts.app')
@section('content')
<h1>Create new Task</h1><br><br>

<form method="post" action="/tasks">

{{csrf_field()}}
<input type="text" placeholder="Task Name" name="name"/><br><br>

<input type="submit" class="btn btn-success" value="Create"/>
</form>
@endsection
 