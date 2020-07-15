<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/carousel.js')}}"></script>
    <script src="https://kit.fontawesome.com/dff7dacd30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/admin/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/admin/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('css/admin/font.css') }}" type="text/css"/>
    <link href="{{ asset('css/admin/font-awesome.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/admin/morris.css') }}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('css/admin/monthly.css') }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('js/admin/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('js/admin/raphael-min.js') }}"></script>
    <script src="{{ asset('js/admin/morris.js') }}"></script>
</head>
<body>
    <div class="container">
    @include('inc.navbar')
        <div class="main">
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Họ tên:</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="name">
                </div>
                <div class="form-group">
                    <label for="phone">SĐT:</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="phone">
                </div>
                <div class="form-group">
                    <label for="addr">Địa Chỉ:</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="addr">
                </div>
                <div class="form-group">
                    <label for="type">Loại banner:</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="type">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @include('inc.footer')
    </div>
   
</body>
</html>