@extends('index')
@section('content')
<div id="page-inner user-info">
    <div class="row">
        <div class="col-lg-7">
            <div class="col-12">Name: {{$user->user_name}}</div>
            <div class="col-12">Email: {{$user->user_email}}</div>
        </div>
        <div class="col-lg-4 user-info-image">
            <img src="{{ asset('assets/img/'. $user->user_image) }}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">Phone Number: {{$user->user_phone}}</div>
        <div class="col-lg-6">Rule: {{rule($user->user_rule)}}</div>
        <div class="col-lg-6">Create at: {{$user->created_at}}</div>
        <div class="col-lg-6">Update at: {{$user->updated_at}}</div>
    </div>
</div>
@endsection