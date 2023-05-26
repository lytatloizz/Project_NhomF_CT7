@extends('index')
@section('content')
<h1>Edit Classroom</h1><br>

    <form action="{{route('update.notification')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $notification->id }}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Notification Name</label>
            <input type="text" name="name" class="form-control" value="{{$notification->name}}" value="{{old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Notification Title</label>
            <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="3">{{$notification->title}}</textarea>
            @error('title')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-info waves-effect waves-light"
          value="Edit">
    </form>
@endsection