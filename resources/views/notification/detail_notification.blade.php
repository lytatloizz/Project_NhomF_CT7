@extends('index')
@section('content')
<div class="container">
    <h1>Detail</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <input type="hidden" name="id" value="{{ $notification -> id }}">   
            <div class="card-body">

                <h5 class="card-title">Notification Name: {{ $notification->name  }}</h5>
                <h5 class="card-title">Notification Title: {{ $notification->title  }}</h5>
                <h5 class="card-title">Date of Writing: {{ $notification->created_at  }}</h5>
         </div>            
</div>
@endsection