
@extends('index')

@section('content')
    <div class="row g-0">   
        <div class="col-md-2">
            <div class="btnSearch">
                 <a href="/users_search" class="btn btn-warning"><i class="fa fa-search "></i> Search Users</a> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="btnCollection">
                <a href="/sapXepUsers" class="btn btn-info"><i class="fa-duotone fa-arrow-up"></i> Sắp Xếp Users</a> 
            </div>   
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
{{ $users->links() }}

@endsection