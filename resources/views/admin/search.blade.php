@extends('admin.layout')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>Tên SP</th>
            <th>Giá</th>
            <th>Image</th>
            <th>BigImage</th>  
        </tr>
    </thead>
    <tbody>
        @foreach($search as $s)
            <tr>
                <td>{{$s->tenSP}}</td>
                <td>{{$s->gia}}</td>
                <td>{{$s->image}}</td>
                <td>{{$s->bigImage}}</td>
                <td><button>Sửa</button></td>
                <td><button>Xóa</button></td>
                <td><button>Lưu</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection