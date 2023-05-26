@extends('index')
@section('content')
<div class="row g-0">
        <div class="col-md-2">
            <div class="btnAdd">
                <a class="btn btn-warning" href="/addClassrooms">Add New Classroom</a> 
            </div>       
        </div>
        <div class="col-md-8">
            <div class="btnAdd">
                 <a class="btn btn-info" href="/collectionClassrooms">Sắp xếp Classroom</a> 
            </div> 
        </div>
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
                    <a class="btn btn-primary" href="{{ asset('deleteClassrooms') }}/{{ $classroom->classroom_id }}" onclick="return confirmDelete()">Delete</a>
                </td>   
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    function confirmDelete() {
        return confirm("Lưu ý: nếu xóa lớp học này thì tất cả dự liệu liên quan sẽ biến mất.\nBạn đã chắc chắn chưa?");
    }
</script>
{{ $classrooms->links() }}

@endsection