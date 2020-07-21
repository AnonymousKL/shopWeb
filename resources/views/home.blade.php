<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/carousel.js')}}"></script>
    <script src="{{ asset('js/custome.js') }}"></script>
    <script src="https://kit.fontawesome.com/dff7dacd30.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        @include('inc.navbar')
        <!-- End navbar -->
        <div class="main">
            <div class="menu-slide">
                <div class="menu">
                    <ul class="menu-ul">
                        @foreach($danhmuc as $dm)
                        <li><a href="collection/{{$dm->id}}" class="danh-muc">{{$dm->ten}}</a></li><hr>
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
                @foreach($nam as $n)
                
                    <li><a href="{{ route('detail', ['id' => $n->id]) }}">
                        <img class="product-img" width="180" height="200" src="{{$n->image}}">
                        <p class="product-name">{{$n->tenSP}}</p>
                        <p class="product-prize">{{ $n->gia }} đ</p>
                        </a>
                    </li>
                @endforeach
                </ul>
                <span class="btn-xemthem"><a href="{{ route('collection',[ 'id' => $n->idDM ]) }}">Xem thêm</a></span>
            </div>
            <div class="product2">
                <h2 class="title">Quần Áo Nữ</h2>
                <hr class="line"></hr>
                <ul class="product-ul">
                @foreach($nu as $g)
                    <li><a href="/shopWeb/public/detail/{{$g->id}}">
                        <img width="180" height="200" src="{{$g->image}}">
                        <p class="product-name">{{$g->tenSP}}</p>
                        <p class="product-prize">{{ $g->gia }} đ</p>
                        </a>
                    </li>
                @endforeach
                </ul>
                <span class="btn-xemthem"><a href="{{ route('collection',[ 'id' => $g->idDM ]) }}">Xem thêm</a></span>
            </div>
        
            <!-- Page 1 -->
            <div class="product2">
                <h2 class="title">Quần Áo Nữ</h2>
                <hr class="line"></hr>
                <ul class="product-ul">
                @foreach($nu as $sp)
                    <li><img width="180" height="200" src="{{$sp->image}}">
                        <p class="product-name">{{$sp->tenSP}}</p>
                        <p class="product-prize">{{ $sp->gia }} đ</p>
                    </li>
                @endforeach
                </ul>
            <span class="btn-xemthem"><a href="{{ route('collection',[ 'id' => $sp->idDM ]) }}">Xem thêm</a></span>
            </div>

            <div class="footer">

            </div>
        </div>

    </div>
   
</body>
</html>