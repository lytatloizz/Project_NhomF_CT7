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
            <th scope="col" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        @csrf
        <tr>
            <th>{{$subject->subject_id}}</th>
            <th namespace="subject_name">{{$subject->subject_name}}</th>
            <th namespace="week_day">{{week_day($subject->week_day)}}</th>
            <th namespace="classroom_id">{{getNameClassRoom($subject->classroom_id)}}</th>
            <th namespace="start_at">{{$subject->start_at}}</th>
            <th namespace="end_at">{{$subject->end_at}}</th>
            <th namespace="user_id">{{getNameUser($subject->user_id)}}</th>
            <th style="text-align: center;">
                @if(rule_number() != 1)
                <a href="/edit-subject/{{$subject->subject_id}}" class="fa fa-edit center btn btn-success"></a>
                @endif
                <a href="/delete-subject/{{$subject->subject_id}}" class="fa fa-trash-o center btn btn-danger"></a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection