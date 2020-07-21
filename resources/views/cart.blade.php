<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}" >
    <script src="{{ asset('js/carousel.js')}}"></script>
    <script src="https://kit.fontawesome.com/dff7dacd30.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container-fluid">
    @include('inc.navbar')
        <div class="main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>  
                    <th>Tổng</th>  
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img width="200" height="200" src="img/thumbnail/vaynu.jpg"></td>
                    <td>Áo khoác gì gì đó</td>
                    <td>234,000 đ</td>
                    <td>x 1</td>
                    <td>234,000 đ</td>
                </tr>
            </tbody>
        </table>
        </div>
        @include('inc.footer')
    </div>
   
</body>
</html>