
@extends('index')

@section('content')
<div class="container">
    <div id="timkiem" class="col-10 p-2 mx-auto">
    <form class="border border-primary p-2 row" action="search" method="get" role="search">
    <input class="border border-primary p-2 col-6" placeholder= "Từ khóa" name="key">
    <button type="submit" class="btn btn-primary p-2 col-2">Tìm </button>
    </form>
    <div id="ketquatim">
        <!-- kết quả tìm kiếm -->
    </div>
    </div>
</div>
@endsection