@extends('index')
@section('content')

<table class="table table-striped table-bordered timetable">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th scope="col">Monday</th>
            <th scope="col">Tuesday</th>
            <th scope="col">Wednesday</th>
            <th scope="col">Thursday</th>
            <th scope="col">Friday</th>
            <th scope="col">Saturday</th>
            <th scope="col">Sunday</th>
        </tr>
    </thead>
    <tbody>
        @foreach($checkclassroom as $classroom)
        <tr>
            <th>{{getNameClassRoom($classroom)}}</th>
            {{createTimeTable($subjectS, $classroom)}}
        </tr>
        @endforeach
    </tbody>
</table>

@endsection