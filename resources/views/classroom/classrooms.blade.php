@extends('index')
@section('content')
<div class="btnAdd">
<a class="btn btn-warning" href="/addClassrooms">Add New Classroom</a> 
</div>
<br>


<table class="table table-striped table-bordered timetable">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th scope="col">Class Name</th>
            <th scope="col">Action</th>        
        </tr>
    </thead>
    <tbody>
        @foreach($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->classroom_id }}</td>
                <td>{{ $classroom->class_name }}</td>
                <td><a class="btn btn-info" href="{{ asset('detail_classroom') }}/{{ $classroom->classroom_id }}">Detail</a>
                    <a class="btn btn-success" href="{{ asset('updateClassrooms') }}/{{ $classroom->classroom_id }}">Edit</a>  
                    <a class="btn btn-primary" href="{{ asset('deleteClassrooms') }}/{{ $classroom->classroom_id }}">Delete</a>
                </td>   
            </tr>
        @endforeach
    </tbody>
</table>

{{ $classrooms->links() }}

@endsection