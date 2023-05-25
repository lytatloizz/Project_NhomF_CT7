@extends('index')
@section('content')
<h1>Add Classroom</h1><br>
<form method="post" action="/update-Classrooms/{{ $classrooms->classroom_id }}">
    @method('post')
    @csrf
    <p>
        <label for="title">Classroom Name</label><br>
        <input type="text" name="class_name" value="{{ $classrooms->class_name }}">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
@endsection