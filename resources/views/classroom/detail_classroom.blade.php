@extends('index')
@section('content')
<div class="container">
    <h1>Detail</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <input type="hidden" name="id" value="{{ $classrooms->classroom_id }}">   
            <div class="card-body">
                <h5 class="card-title">ID: {{ $classrooms->classroom_id }}</h5>
                <h5 class="card-title">Name: {{ $classrooms->class_name }}</h5>
         </div>            
</div>
@endsection