@extends('admin.layout')

@section('content')
<h2>Add banner/Ads</h2>
    <form action="{{ URL::to('/product/addimage') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="type">Loại banner:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="type">
            </div>
            <div class="form-group">
                <label for="link">Liên kết:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="link">
            </div>
            <div class="form-group">
                <label for="banner">Banner:</label>
                <input type="file" class="form-control" placeholder="Enter email" name="banner">
            </div>
                <button type="submit" class="btn btn-primary">Upload</button>
    </form>
@endsection