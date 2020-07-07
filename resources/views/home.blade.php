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
    
</head>
<body>
    <div class="container">
        <div class="header">
            <span class="logo"><a href="#"><img src="{{asset('img/icon/logo.png')}}"></a></span>
            <div class="header-right">
                <p id="contact"><a href="#">Contact: phananhnhat2@gmail.com</a></p>
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
                    <span id="btn-login"><a href="{{URL::to('/login')}}">Đăng Nhập</a></span>
                    <span id="btn-register"><a href="{{URL::to('/login')}}">Đăng Ký</a></span>
                </div>
            </div>
        </div>
        <!-- End navbar -->
        <div class="main">
            <div class="menu-slide">
                <div class="menu">
                    <ul class="menu-ul">
                        @foreach($danhmuc as $dm)
                        <li><a href="#">{{$dm->ten}}</a></li><hr>
                        @endforeach
                    </ul> 
                </div>
                <div class="carousel">
                 
                    <div class="carousel__track-container">
                        <ul class="carousel__track">
                            <li class="carousel__slide current-slide">
                                <img src="../../public/img/poster/banner_slide.jpg" alt="">
                            </li>
                            <li class="carousel__slide">
                                <img src="../../public/img/poster/banner_slide.jpg" alt="">
                            </li>
                            <li class="carousel__slide">
                                <img src="../../public/img/poster/banner_slide.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="carousel__button carousel__button--left">
                        <i class="fas fa-angle-left fa-2x"></i>
                    </div>
                  <div class="carousel__button carousel__button--right">
                        <i class="fas fa-angle-right fa-2x"></i>
                  </div>
                  <div class="carousel__nav">
                    <button class="carousel__indicator current-slide"></button>
                    <button class="carousel__indicator"></button>
                    <button class="carousel__indicator"></button>
                  </div>
                </div>
            </div>
            <!-- End slide -->
            <div class="product1">
                <h2 class="title">Quần Áo Nam</h2>
                <hr class="line"></hr>
                <ul class="product-ul">
                    <li><a href="#">
                        <img class="product-img" width="180" height="200" src="../../public/img/thumbnail/sp1.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                        </a>
                    </li>
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                   
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img class="product-img" width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                </ul>
                <span class="btn-xemthem">Xem thêm</span>
            </div>
            <div class="product2">
                <h2 class="title">Quần Áo Nữ</h2>
                <hr class="line"></hr>
                <ul class="product-ul">
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                   
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                    <li><img width="180" height="200" src="../../public/img/thumbnail/chicago.jpg">
                        <p class="product-name">Áo dài tay</p>
                        <p class="product-prize">234.999 đ</p>
                    </li>
                </ul>
                <span class="btn-xemthem">Xem thêm</span>
            </div>
        
            <!-- Page 1 -->
            <div class="product2">
                <h2 class="title">Quần Áo Nữ</h2>
                <hr class="line"></hr>
                <ul class="product-ul">
                @foreach($sanpham as $sp)
                    <li><img width="180" height="200" src="{{$sp->image}}">
                        <p class="product-name">{{$sp->tenSP}}</p>
                        <p class="product-prize">{{ $sp->gia }} đ</p>
                    </li>
                @endforeach
                </ul>
            <span class="btn-xemthem">Xem thêm</span>
            </div>

            <div class="footer">

            </div>
        </div>

    </div>
   
</body>
</html>