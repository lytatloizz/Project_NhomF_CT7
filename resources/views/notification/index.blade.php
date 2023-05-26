@if(isset($user) && isset($user->user_rule))
    <?php
    $user_rule = $user->user_rule;

    ?>
@endif

@extends('index')
@section('content')

<?php
    if ($users->user_rule == '0') {
?>

    <div class="btnAdd">
        <a class="btn btn-warning" href="{{ route('add.notification') }}">Add New Notification</a> 
    </div>
<?php } ?>
<br>


<table class="table table-striped table-bordered timetable">
    <thead>
        <tr class="info">
            <th scope="col">ID</th>
            <th scope="col">Notification Name</th>
            <th scope="col">Notification Title</th>
            <th scope="col">Day of Writing</th>
            <th scope="col">Status</th>        
        </tr>
    </thead>
    <tbody>
        @foreach($notification as $key => $notifications)
        <tr>
            <td>{{$key + 1 }}</td>
            <td>{{ Str::limit(strip_tags($notifications->name), 20, '...')}}</td>
            <td>{{ Str::limit(strip_tags($notifications->title), 30, '...') }}</td>
            <td>{{ $notifications->created_at}}</td>
            <td>
            <?php
                if ($users->user_rule == '0') { ?>
                    <a class="btn btn-success" href="{{ route('edit.notification', $notifications->id) }}">Edit</a>  
                    <a class="btn btn-danger" href="{{ route('delete.notification', $notifications->id) }}"  onclick="return confirmDelete()">Delete</a>
                    <a class="btn btn-primary" href="{{ route('detail.notification', $notifications->id) }}">Detail</a>
                <?php } else { ?>

                    <a class="btn btn-primary" href="{{ route('detail.notification', $notifications->id) }}" >Detail</a>
                <?php } ?>
            </td>   
        </tr>
    @endforeach
    
    </tbody>
</table>
<script>
    function confirmDelete() {
        return confirm("Bạn muốn xóa thông báo này?");
    }
</script>
<div class="pagination">
    <span class="pagination-item">Trang {{ $notification->currentPage() }} trên {{ $notification->lastPage() }}</span>
    {{ $notification->links() }}
</div>
@endsection
