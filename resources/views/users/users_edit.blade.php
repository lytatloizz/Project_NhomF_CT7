@extends('index')

@section('content')
<h1>Edit User</h1>
<form method="GET" action="/usersedit/{{ $user->user_id }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Name input -->
                        <div class="form-outline mb-3">
                            <input type="text" name="user_name" class="form-control form-control-md" value="{{ $user->user_name }}" placeholder="Enter a valid name" required />
                            <label class="form-label" for="form3Example3">Your Name</label>
                            @if ($errors->has('user_name'))
                            <span class="text-danger">{{ $errors->first('user_name') }}</span>
                            @endif
                        </div>

                        <!-- Phone input -->
                        <div class="form-outline mb-3">
                            <input type="text" name="user_phone" class="form-control form-control-md" value="{{ $user->user_phone }}" placeholder="Enter a valid phone number" required />
                            <label class="form-label" for="form3Example3">Your Phone Number</label>
                            @if ($errors->has('user_phone'))
                            <span class="text-danger">{{ $errors->first('user_phone') }}</span>
                            @endif
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <input type="email" name="user_email" class="form-control form-control-md"  value="{{ $user->user_email }}" placeholder="Enter a valid email address" required />
                            <label class="form-label" for="form3Example3">Email address</label>
                            @if ($errors->has('user_email'))
                            <span class="text-danger">{{ $errors->first('user_email') }}</span>
                            @endif
                        </div>

                        <!-- Imgae input -->
                        <div class="form-outline mb-3">
                            <input type="file" name="user_image" class="form-control form-control-md" value="{{ $user->user_image }}" required />
                            <label class="form-label" for="form3Example3">Chose Your Avatar</label>
                            @if ($errors->has('user_image'))
                            <span class="text-danger">{{ $errors->first('user_image') }}</span>
                            @endif
                        </div>

                        <!-- Rule options -->
                        <div class="form-outline mb-3">
                            <select id="rule" class="form-control form-control-md" name="user_rule">
                                @if ( $user->user_rule  == 1)
                                <option value="1" selected>Student</option>
                                @endif
                                @if ( $user->user_rule != 1)
                                <option value="2" selected>Teacher</option>
                                @endif
                            </select>
                            <label class="form-label" for="rule">Chose your type</label>
                            @if ($errors->has('user_rule'))
                            <span class="text-danger">{{ $errors->first('user_rule') }}</span>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control form-control-md" required />
                            <label class="form-label">Password</label>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>



                        <div class="text-center text-lg-start mt-1">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Update User</button>
                        </div>
                    </form>
@endsection