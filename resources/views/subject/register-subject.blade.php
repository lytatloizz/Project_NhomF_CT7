@extends('index')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr class="bg-primary">
            <th scope="col">#</th>
            <th scope="col">Subject-name</th>
            <th scope="col">Week_day</th>
            <th scope="col">Classroom</th>
            <th scope="col">Start_at</th>
            <th scope="col">End_at</th>
            <th scope="col">Teacher</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <form action="{{route('saveSubject')}}" method="POST">
            @csrf
            <tr>
                <input type="hidden" name="subject_name" value="{{$subject->subject_name}}">
                <input type="hidden" name="subject_numbers" value="{{$subject->subject_numbers}}">
                <input type="hidden" name="start_at" value="{{$subject->start_at}}">
                <input type="hidden" name="end_at" value="{{$subject->end_at}}">
                <input type="hidden" name="week_day" value="{{$subject->week_day}}">
                <input type="hidden" name="classrooms" value="{{$subject->classroom_id}}">
                <th>{{$subject->subject_id}}</th>
                <th>{{$subject->subject_name}}</th>
                <th>{{week_day($subject->week_day)}}</th>
                <th>{{getNameClassRoom($subject->classroom_id)}}</th>
                <th>{{$subject->start_at}}</th>
                <th>{{$subject->end_at}}</th>
                <th>{{getNameUser($subject->user_id)}}</th>
                <th style="text-align: center;"><button class="fa fa-plus-circle center btn btn-primary"></button></th>
            </tr>
        </form>
        @endforeach
    </tbody>
</table>
@endsection