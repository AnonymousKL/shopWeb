<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/detail.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dff7dacd30.js" crossorigin="anonymous"></script>
    <title>Detail</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <span class="logo"><a href="#"><img src="../../public/img/icon/logo.png"></a></span>
            <div class="header-right">
                <p id="contact">Contact: phananhnhat2@gmail.com</p>
                <div class="social-network" style="font-size: 18px;">
                    <i class="fab fa-facebook-square fa-lg"></i>
                    <i class="fab fa-twitter-square fa-lg"></i>
                    <i class="fab fa-instagram-square fa-lg"></i>
                </div>
                <div class="search">
                    <form class="search-form" action="" method="">
                        <input type="text" id="search-box" placeholder="Tìm kiếm">
                        <button type="button" id="btn-search">Search</button>
                    </form>
                    <span id="btn-login"><a href="#">Đăng Nhập</a></span>
                    <span id="btn-register"><a href="#">Đăng Ký</a></span>
                </div>
            </div>
        </div>
        <!-- End header -->
        <div class="bread-crum">
            <p><i>Trang chủ / Quần áo nam / Hoddie</i></p>
        </div>
        <div class="detail-product">
            <div class="poster-left">
                <img width="650" height="350" src="../../public/img/poster/banner_slide.jpg">
            </div>
            <div class="detail-right">
                <h1 class="product-name-dt">Almost before we knew it</h1>
                <div class="product-dt">
                    <p class="product-key">Size: <span class="product-val">M</span></p>
                    <p class="product-key">Số lượng: <span class="product-val">2</span></p>
                    <p class="product-key">Giá: <span class="product-val">234.000 đ</span></p>
                </div>
                <div class="btn-wrap">
                    <button class="btn btn-add">Thêm vào giỏ</button>
                    <button class="btn btn-buy">Mua ngay</button>
                </div>
            </div>
        </div>
        
        <div class="description">
            <h2>CHI TIẾT SẢN PHẨM</h2>
            <p>Bảng SIZE: Quần / Áo form châu Âu rộng rộng nhé các cậu </p>
            <p>(Bảng size mang tính chất tham khảo và phù hợp 80-90% sở thích các cậu ạ. Các bạn muốn chọn size phù hợp có thể xem hình feedback các khách đã mua hoặc inbox cho 1hitshop nhé ^^)
            </p>
        </div>

        <div class="rela-product">

        </div>


    </div>

</body>
</html>