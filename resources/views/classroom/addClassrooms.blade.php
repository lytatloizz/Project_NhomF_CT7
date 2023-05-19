@extends('index')
@section('content')
<h1>Add Classroom</h1><br>
<form method="post" action="add-Classrooms">
    @method('get')
    @csrf
    <p>
        <label for="title">Classroom Name</label><br>
        <input type="text" name="class_name" value="">
    </p>
    <p>
        <button type="submit">Add Classroom</button>
    </p>
</form>
@endsection