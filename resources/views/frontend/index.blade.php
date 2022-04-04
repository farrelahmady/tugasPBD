<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="landing page/assets/just-logo.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="landing page/style.css">
    <!-- javascript -->
    <script type="text/javascript" src="landing page/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script type="text/javascript" src="landing page/assets/js/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="landing page/assets/css/animate.min.css">

    <script>
        $(window).scroll(function() {
            $('nav, a').toggleClass('scrolled', $(this).scrollTop() > 50);
        });
    </script>

    <title>Note List</title>
</head>

<body>
    <div class="wrap-container">
        <div class="container-fluid">
            <!-- Menu -->
            <div class="row" id="menu">
                <nav class="navbar menu navbar-expand-lg navbar-light">
                    <div class="menu-wrap d-flex container-fluid justify-content-between ">

                        <button class="navbar-toggler order-" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand logo m-0 d-sm-none d-md-none d-none d-lg-block" href="#menu"> Note List</a>

                        <div class="d-flex">
                            <div class="menu-collapse collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav my-1 mx-auto">
                                    @if (Route::has('login'))
                                    @auth
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                                    </li>
                                    @endif
                                    @endif
                                </ul>
                                @if (Route::has('login'))
                                @auth
                                <a href="{{ url('/dashboard') }}">
                                    <button type="button" class="btn-nav">Dashboard</button>
                                </a>
                                @elseif (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button type="button" class="btn-nav">Get Started</button>
                                </a>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <img src="landing page/assets/liquid.png" class="decor">

            <!-- HERO -->
            <div class="container-content py-5">
                <div class="row mx-5 my-5" id="hero">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 text-lg-start text-md-center text-sm-center text-center my-auto mx-auto wow fadeInLeft">
                        <p class="slogan">
                            Tugas Paruh Pertama
                            <br>
                            Pemrograman Basis Data
                        </p>
                        <div class="row" id="about" style="padding-bottom: 20px;">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.5s">
                                <p style="color: black; font-weight:700; font-size: 24px;">
                                    Kelompok 08
                                </p>
                            </div>
                            <div class="col-3 text-center wow fadeInUp" data-wow-delay="1s">
                                <img src="landing page/assets/ilhambaru.png" alt="Muhammad Ilham" width="100%" class="dev-ava">
                                <span style="font-size: 15px; font-weight: bold;">
                                    Muhammad Ilham
                                </span>
                            </div>
                            <div class="col-3 text-center wow fadeInUp" data-wow-delay="1.5s">
                                <img src="landing page/assets/ahmad.png" alt="Farrel Ahmad" width="100%" class="dev-ava">
                                <span style="font-size: 15px; font-weight: bold;">
                                    Farrel Ahmad Y.
                                </span>
                            </div>
                            <div class="col-3 text-center wow fadeInUp" data-wow-delay="2s">
                                <img src="landing page/assets/dika.png" alt="Andika Auli" width="100%" class="dev-ava">
                                <span style="font-size: 15px; font-weight: bold;">
                                    Andika Auli A.M.
                                </span>
                            </div>
                            <div class="col-3 text-center wow fadeInUp" data-wow-delay="2s">
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{ route('register') }}">
                                <button type="button" class="btn-sign mb-3">Get Started</button>
                            </a>
                        </div>
                    </div>
                    <div class=" col-5 d-md-none d-sm-none d-none d-lg-inline wow fadeInRight">
                        <img src="landing page/assets/proud 1.png" width="100%">
                    </div>
                </div>
            </div>
            <!-- HERO -->
        </div>
    </div>

    <script>
        new WOW().init();
        $(document).ready(function() {
            $('.menu .menu-wrap .menu-collapse ul li a').click(function(e) {

                var targetHref = $(this).attr('href');

                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top
                }, 50);

                e.preventDefault();
            });
            $('.nav-item .nav-link').click(function(event) {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>
