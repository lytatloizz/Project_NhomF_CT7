@extends('index')
@section('content')
<div class="page-inner">
    <form action="{{route('editSubject')}}" method="POST">
        @csrf
        <div class="row">
            <input type="hidden" name="subject_id" value="{{$subject->subject_id}}">
            <div class="col-xs-6 form-group">
                <label for="Name">Subject Name</label>
                <input type="text" class="form-control" name="subject_name" id="Name" value="{{$subject->subject_name}}" placeholder="Subject Name">
            </div>
            <div class="col-xs-6 form-group">
                <label for="Number">Numbers</label>
                <input type="number" class="form-control" name="subject_numbers" id="Number" value="{{$subject->subject_numbers}}" placeholder="Numbers">
            </div>
            <div class="col-xs-6 form-group">
                <label for="Start">Start at</label>
                <input type="text" class="form-control timepicker" name="start_at" id="Start">
            </div>
            <div class="col-xs-6 form-group">
                <label for="End">End at</label>@if ($errors->has('end_at'))<span class="text-danger"> |{{ $errors->first('end_at') }}</span>@endif
                <input type="text" class="form-control timepicker" name="end_at" id="End">
            </div>
            <div class="col-xs-6  form-group">
                <label for="week-day">Chose one day</label>
                <select class="form-control" name="week_day" id="week-day">
                    @if($subject->week_day == '2')
                    <option value="2" selected>Monday</option>
                    @else
                    <option value="2">Monday</option>
                    @endif
                    @if($subject->week_day == '3')
                    <option value="3" selected>Tuesday</option>
                    @else
                    <option value="3">Tuesday</option>
                    @endif
                    @if($subject->week_day == '4')
                    <option value="4" selected>Wednesday</option>
                    @else
                    <option value="4">Wednesday</option>
                    @endif
                    @if($subject->week_day == '5')
                    <option value="5" selected>Thursday</option>
                    @else
                    <option value="5">Thursday</option>
                    @endif
                    @if($subject->week_day == '6')
                    <option value="6" selected>Friday</option>
                    @else
                    <option value="6">Friday</option>
                    @endif
                    @if($subject->week_day == '7')
                    <option value="7" selected>Saturday</option>
                    @else
                    <option value="7">Saturday</option>
                    @endif
                    @if($subject->week_day == '8')
                    <option value="8" selected>Sunday</option>
                    @else
                    <option value="8">Sunday</option>
                    @endif
                    @if($subject->week_day == '2')
                    @else
                    @endif
                </select>
            </div>
            <div class="col-xs-6 form-group">
                <label for="description">Subject description</label>
                <textarea class="form-control" name="subject_description" id="description" placeholder="Note" rows="1"></textarea>
            </div>
            <div class="col-xs-6 form-group">
                <label for="class">Class Name</label>
                <select class="form-control" name="classrooms" id="class">
                    @foreach($classrooms as $classroom)
                        @if($classroom->classroom_id == $subject->classroom_id)
                        <option value="{{$classroom->classroom_id}}" selected>{{$classroom->class_name}}</option>
                        @else
                        <option value="{{$classroom->classroom_id}}">{{$classroom->class_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-success">Save Subject</button>
        </div>
    </form>
</div>
@endsection