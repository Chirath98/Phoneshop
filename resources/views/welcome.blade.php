@extends('layouts.layout')


@section('content')
<div class="button-wrapper">
    <a href="{{ url('/login') }}" class="login-button">Login</a>
</div>
<div class="flex-center position-ref full-height">
    @if (Route::has('login') && Auth::check())
    <div class="top-right links">
        <a href="{{ url('/home') }}">Dashboard</a>
    </div>
    @elseif (Route::has('login') && !Auth::check())
    <div class="top-right links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </div>
    @endif

    <div class="content1">
        <img src="images/web-logo.png" alt="phoneshop logo">
        <p1>The Ultimate Online Gadget Store</p1>

        <div class="links">
            <a href="#">MOBILE PHONES</a>
            <a href="#">MACBOOKS</a>
            <a href="#">MOBILE ACCESSORIES</a>
            <a href="#">GADGETS</a>
            <a href="#">LAPTOPS</a>
            <a href="http://127.0.0.1:8000/product">Baseus</a>
        </div>
    </div>
</div>


<!-- content -->

<!--Begin carousel-->

<div class="mainCarousel">
    <div id="homepage_carousel" class="carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homepage_carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homepage_carousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homepage_carousel" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/34.jpg" class="d-block w-100" alt="Slide1">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/9.jpg" class="d-block w-100" alt="Slide2">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/8-1.jpg" class="d-block w-100" alt="slide3">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homepage_carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homepage_carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--End carousel-->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section class="categories">
        <div class="container">
            <br>
            <h2 class="text-center">Categories</h2>
            <br>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card-1">
                        <a href="#">
                            <img src="images/iphone-14-pro-max-apple-asia-srilanka-space-black-1.jpg"
                                class="card-img-top" alt="">
                        </a>
                        <!-- <div class="card-body">
                            <h5 class="card-title">Mobile Parts</h5>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-1">
                        <a href="#">
                            <img src="images/Apple-iPad-Pro-2021-M1-Chip-11-inch-3rd-Gen-WiFi-128GB.jpg"
                                class="card-img-top" alt="">
                        </a>
                        <!-- <div class="card-body">
                            <h5 class="card-title">Tablets</h5>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-1">
                        <a href="#">
                            <img src="images/Apple-AirPods-Pro-2-2022.jpg" class="card-img-top" alt="">
                        </a>
                        <!-- <div class="card-body">
                            <h5 class="card-title">Mobile Accessories</h5>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="categories">
        <div class="container">
            <br>
            <h2 class="text">LATEST MOBILE PHONES</h2>
            <br>

            <div class="row row-cols-5">
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/01-1.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Samsung Galaxy A53 5G 8GB RAM</h6>
                            <p>Rs.119,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/Samsung-galaxy-S23-ultra-1.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Samsung Galaxy S23 12GB RAM </h6>
                            <p>Rs.369,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/Google-Pixel-7-3.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Google Pixel 7 5G 8GB </h6>
                            <p>Rs.189,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/iphone-14-pro-max-apple-asia-srilanka-space-black-1.jpg"
                                class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Apple iPhone 14 Pro 128GB</h6>
                            <p>Rs.379,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/Samsung-galaxy-S23-8GB-256GB-2-1.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Samsung galaxy S23 8GB 256GB</h6>
                            <p>Rs.269,900.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="categories">
        <div class="container">
            <br>
            <h2 class="text1">TOP SELLING</h2>
            <br>

            <div class="row row-cols-5">
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/JBL-Partybox-310.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">JBL Partybox 310</h6>
                            <p>Rs.219,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/celltronics-temp112.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">JBL PartyBox </h6>
                            <p>Rs.469,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/resized-image-Promo-9.jpeg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">JBL PartyBox </h6>
                            <p>Rs.144,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/JBL-Boombox-2.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">JBL Boombox 2</h6>
                            <p>Rs.169,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/JBL-Xtreme-3-6-600x600-1.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">JBL Xtreme 3 </h6>
                            <p>Rs.114,900.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <br>
            <h2 class="text">iPads & Tablets</h2>
            <br>

            <div class="row row-cols-5">
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/01-6.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Samsung Galaxy Tab A8 X205 4GB </h6>
                            <p>Rs.119,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/Apple-iPad-Pro-2021-M1-Chip-12.9-inch-5th-Gen-WiFi-Cellular-128GB-1.jpg"
                                class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Apple iPad Pro 2021 M2
                            </h6>
                            <p>Rs.479,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/Apple-iPad-Pro-2021-M1-11-inch-WiFi-Cellular-128GB-silver.jpg"
                                class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Apple iPad Pro 2021 M1</h6>
                            <p>Rs.389,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/04.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Apple iPad Air 5 64GB WiFi</h6>
                            <p>Rs.209,900.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <a href="#">
                            <img src="images/01-8.jpg" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title">Samsung Galaxy Tab S8+ 128GB</h6>
                            <p>Rs.269,900.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="categories">
        <div class="container">
            <br>







</main><!-- End #main -->

<style>
.flex-center {
    display: flex;
    justify-content: center;
    /* align-items: center; */
}

.position-ref {
    position: relative;
}

/* .full-height {
    height: 100vh;
} */

.top-right {
    position: absolute;
    top: 10px;
    right: 18px;
}

.links a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
}

.content1 {
    text-align: center;
}

.title {
    font-size: 84px;
    margin-bottom: 30px;
}

.links a:hover {
    color: #1f6fb2;
}

.p1 {
    font-size: 24px;
    margin-bottom: 30px;
}

.button-wrapper {
    text-align: right;
    margin-top: 10px;
}

.login-button {
    padding: 8px 16px;
    background-color: #1f6fb2;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
}

.login-button:hover {
    background-color: #165d93;
}
</style>


@endsection