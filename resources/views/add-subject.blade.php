@extends('index')
@section('content')
<div class="page-inner">
    <form action="{{route('saveSubject')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-6 form-group">
                <label for="Name">Subject Name</label>
                <input type="text" class="form-control" name="subject_name" id="Name" placeholder="Subject Name">
            </div>
            <div class="col-xs-6 form-group">
                <label for="Number">Numbers</label>
                <input type="number" class="form-control" name="subject_numbers" id="Number" placeholder="Numbers">
            </div>
            <div class="col-xs-6 form-group">
                <label for="Start">Start at</label>
                <input type="text" class="form-control timepicker" name="start_at" id="Start">
            </div>
            <div class="col-xs-6 form-group">
                <label for="End">End at</label>@if ($errors->has('end_at'))<span class="text-danger">  |{{ $errors->first('end_at') }}</span>@endif
                <input type="text" class="form-control timepicker" name="end_at" id="End">
            </div>
            <div class="col-xs-6  form-group">
                <label for="week-day">Chose one day</label>
                <select class="form-control" name="week_day" id="week-day">
                    <option value="2">Monday</option>
                    <option value="3">Tuesday</option>
                    <option value="4">Wednesday</option>
                    <option value="5">Thursday</option>
                    <option value="6">Friday</option>
                    <option value="7">Saturday</option>
                    <option value="8">Sunday</option>
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
                    <option value="{{$classroom->classroom_id}}">{{$classroom->class_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-success">Add Subject</button>
        </div>
    </form>
</div>



@endsection