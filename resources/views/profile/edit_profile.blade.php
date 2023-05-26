@extends('index')
@section('content')
    <div id="page-inner user-info">
        <div class="column">
            <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Name</label>
                    <input class="form-control" name="user_name" type="text" value="{{ $editData->user_name }}" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Email</label>
                    <input class="form-control" name="user_email" type="email" value="{{ $editData->user_email }}" id="formFileMultiple">
                </div>
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Phone</label>
                    <input class="form-control" name="user_phone" type="tel" value="{{ $editData->user_phone }}" id="formFileDisabled">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Image</label>
                    <input class="form-control form-control-lg" name="user_image" id="image" type="file">
                </div>
                <div>
                    <label for="formFileLg" class="form-label"></label>
                    <img id="showImage" class="rounded avatar-lg" style="width: 80px" src="{{ (!empty($editData->user_image)) ? url('upload/user_images/'.$editData->user_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
                <div class="btn">
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
                </div>
            </form>
        </div>
    </div>
@endsection
