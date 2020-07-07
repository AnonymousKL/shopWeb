@extends('admin.layout')

@section('add')
        <h2>Thêm Sản Phẩm</h2><br>
        <form action="{{URL::to('/add')}}" method="post">
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
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection