@extends('index')
@section('content')
<h1>Add Notification</h1><br>

    <form action="{{route('store.notification')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Notification Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Notification Title</label>
            <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br>
        <input type="submit" class="btn btn-info waves-effect waves-light"
          value="Add">
    </form>
@endsection