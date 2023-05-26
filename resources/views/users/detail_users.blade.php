@extends('index')

@section('content')
<div class="container">
    <h1>Detail User</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <input type="hidden" name="id" value="{{ $users->id }}">
            <div class="col-md-6">
                <img src="{{url('assets/img/' . $users->user_image)}}" class="img-fluid rounded-start" alt="..." style="height: 200px; width: 200px;">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{ $users->user_name }}</h5>
                    <h5 class="card-title">{{ $users->user_email  }}</h5>
                    <h5 class="card-title">{{ $users->user_phone }}</h5>
                    <h5 class="card-title">{{ $users->user_rule }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection