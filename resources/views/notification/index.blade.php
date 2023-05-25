@extends('index')
@section('content')
<div class="btnAdd">
<a class="btn btn-warning" href="{{route('add.notification')}}">Add New Notification</a> 
</div>
<br>


<table class="table table-striped table-bordered timetable">
    <thead>
        <tr class="info">
            <th scope="col">ID</th>
            <th scope="col">Notification Name</th>
            <th scope="col">Notification Title</th>
            <th scope="col">Status</th>        
        </tr>
    </thead>
    <tbody>
        @foreach($notification as $key => $notifications)
            <tr>
                <td>{{$key + 1 }}</td>
                <td>{{ Str::limit(strip_tags($notifications->name), 10, '...')}}</td>
                <td>{{ Str::limit(strip_tags($notifications->title), 50, '...') }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('edit.notification', $notifications->id) }}">Edit</a>  
                    <a  class="btn btn-danger" href="{{ route('delete.notification', $notifications->id) }}">Delete</a>
                    <a  class="btn btn-primary" href="{{ route('detail.notification', $notifications->id) }}">Detail</a>
                </td>   
            </tr>
        @endforeach
    </tbody>
</table>
<!-- Hiển thị liên kết phân trang -->

<div class="pagination">
    <span class="pagination-item">Trang {{ $notification->currentPage() }} trên {{ $notification->lastPage() }}</span>
    {{ $notification->links() }}
</div>
{{-- 
{{ $notification->links() }} --}}

@endsection