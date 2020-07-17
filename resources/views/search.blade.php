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
    @include('inc.navbar')
        <div class="main">
            <h2 class="title">Result for search : {{ $_GET['keyword'] }}</h2>
            <hr class="line"></hr>
            <ul class="product-ul">
            @foreach($search as $n)
                <li><a href="{{ route('detail', ['id' => $n->id]) }}">
                    <img class="product-img" width="180" height="200" src="{{$n->image}}">
                    <p class="product-name">{{$n->tenSP}}</p>
                    <p class="product-prize">{{ $n->gia }} đ</p>
                    </a>
                </li>
            @endforeach
            </ul>
        </div>    
    @include('inc.footer')
        
    </div>
</body>
</html>