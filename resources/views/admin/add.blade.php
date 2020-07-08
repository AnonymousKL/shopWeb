@extends('admin.layout')

@section('content')
<h2>Thêm Sản Phẩm</h2><br>
        <form action="{{URL::to('/product/create')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="tensp">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="tensp">
            </div>
            <div class="form-group">
                <label for="theloai">Thể loại:</label>
                <input type="text" class="form-control" placeholder="Enter password" name="theloai">
            </div>
            <div class="form-group">
                <label for="gia">Giá:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="gia">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" placeholder="Enter email" name="image">
            </div>
            <div class="form-group">
                <label for="bigimage">BigImage:</label>
                <input type="file" class="form-control" placeholder="Enter email" name="bigimage">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection