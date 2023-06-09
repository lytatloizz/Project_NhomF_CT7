@extends('index')

@section('content')
<h1>Tim thay {{ count($users) }} users</h1>

<div class="container">
    <div id="timkiem" class="col-10 p-2 mx-auto" >
        <form class="border border-primary p-2 row " action="search" method="get" role="search">
            <input class="border border-primary p-2 col-6" placeholder= "Từ khóa" name="key">
            <button type="submit" class="btn btn-primary p-2 col-2">Tìm </button>
        </form>
    </div>
</div>
<br>
<table class="table table-striped table-bordered timetable">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th scope="col">Your Name</th>
            <th scope="col">Your Phone Number</th>
            <th scope="col">Email address</th>
            <th scope="col">Your Avatar</th>
            <th scope="col">Your type</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->user_phone }}</td>
                <td>{{ $user->user_email }}</td>

                <td><img src="{{url('assets/img/'. $user->user_image)}}" alt="" style="height: 50px; width: 50px;"></td>
                <td>{{ $user->user_rule }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ asset('/detail_users') }}/{{ $user->user_id }}">Detail</a>
                    <a class="btn btn-info" href="{{ asset('/users_edit') }}/{{ $user->user_id }}">Update</a>
                    <a class="btn btn-danger" href="{{ asset('/delete_users') }}/{{ $user->user_id }}">Delete</a>
                <td>
            </tr>
    @endforeach
    </tbody>
    
</table>

@endsection