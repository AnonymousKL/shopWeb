<div class="header">
    <span class="logo"><a href="{{ URL::to('/') }}"><img src="{{asset('img/icon/logo.png')}}"></a></span>
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