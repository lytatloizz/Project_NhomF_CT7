@extends('index')
@section('content')
    <div id="page-inner user-info">
        <div class="card">
            <h4 class="card-title">Change Password Page </h4><br><br>

            <form method="post" action="{{ route('update.password') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="user_email" value="{{$user->user_email}}">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Old Password</label>
                    <input type="password" name="oldpassword"
                        class="form-control @error('oldpassword') is-invalid @enderror" id="current_password"
                        placeholder="Old Password" />

                    @error('oldpassword')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                    <input type="password" name="newpassword"
                        class="form-control @error('newpassword') is-invalid @enderror" id="newpassword"
                        placeholder="New Password" />

                    @error('newpassword')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control"
                        id="confirm_password" placeholder="Confirm New Password" />
                </div>
                
                <br>
                <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
            </form>
        </div>
    </div>
@endsection
