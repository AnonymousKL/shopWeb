<div class="header">
    <span class="logo"><a href="{{ URL::to('/') }}"><img src="{{asset('img/icon/logo.png')}}"></a></span>
    <div class="header-right">
        <p id="contact"><a href="#">Contact: phananhnhat2@gmail.com</a></p>
        <div id="cart-items">
            <ul>
                <li>
                    <img width="50" height="80" src="">
                    <div class="item-detail">
                        <p class="item-price">234,000 đ <span>x 1</span></p>
                        <p class="item-name">Áo choàng nam nữ gì gì đó</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="social-network" style="font-size: 18px;">
            <a href="{{URL::to('/cart')}}"><i class="fas fa-cart-plus fa-lg cart "  onmouseover="mouseover()" onmouseout="mouseout()"></i></a>
            <a href="https://facebook.com"><i class="fab fa-facebook-square fa-lg"></i></a>
            <a href="https://twitter.com"><i class="fab fa-twitter-square fa-lg"></i></a>
            <a href="https://instagram.com"><i class="fab fa-instagram-square fa-lg"></i></a>
        </div>
        <div class="search">
            <form class="search-form" action="searchsp" method="get">
                <input type="text" name="keyword" id="search-box" placeholder="Tìm kiếm">
                <button type="submit" id="btn-search">Search</button>
            </form>
            <span id="btn-login"><a href="{{URL::to('/login')}}">Đăng Nhập</a></span>
            <span id="btn-register"><a href="{{URL::to('/register')}}">Đăng Ký</a></span>
        </div>
    </div>
</div>