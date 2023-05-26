@extends('index')
@section('content')
<div id="page-inner user-info">
    <div class="row">
        <div class="col-lg-4 user-info-image">
            <img class="rounded-circle avatar-xl" style="width: 50%" src="{{ asset('assets/img/'. $user->user_image) }}" alt="Card image cap">
        </div>
        <div class="col-lg-7">
            <div class="col-12">Name: {{$user->user_name}}</div>
            <div class="col-12">Email: {{$user->user_email}}</div>
            <div class="col-12">Phone: {{$user->user_phone}}</div>
        </div>
        <a href="{{route('profile.edit')}}">
            <button type="button" class="btn btn-primary">Edit</button>
        </a>
        
    </div>
</div>
@endsection