<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>memorial books | @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="front/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="front/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="front/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="front/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout home_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="front/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="{{ route('index') }}"><img src="front/images/logo.png"
                                            alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="{{ route('index') }}">Home</a> </li>
                                        <li> <a href="{{ route('about') }}">About us</a> </li>
                                        <li><a href="{{ route('ourbooks') }}">Our Books</a></li>
                                        <li><a href="{{ route('library') }}">library</a></li>
                                        <li><a href="{{ route('contactus') }}">Contact us</a></li>
                                        <li class="mean-last"> <a href="{{ route('search') }}"><img src="front/images/search_icon.png"
                                                    alt="#" /></a> </li>
                                        <li class="mean-last"> <a href="#"><img src="front/images/top-icon.png"
                                                    alt="#" /></a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end header inner -->
    </header>

    @yield('content')

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="Follow">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="location_icon">
                            <li> <a href="#"><img src="front/icon/facebook.png"></a></li>
                            <li> <a href="#"><img src="front/icon/Twitter.png"></a></li>
                            <li> <a href="#"><img src="front/icon/linkedin.png"></a></li>
                            <li> <a href="#"><img src="front/icon/instagram.png"></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="Follow">
                            <h3>Newsletter</h3>
                        </div>
                        <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                        <button class="Subscribe">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="front/js/jquery.min.js"></script>
    <script src="front/js/popper.min.js"></script>
    <script src="front/js/bootstrap.bundle.min.js"></script>
    <script src="front/js/jquery-3.0.0.min.js"></script>
    <script src="front/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="front/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="front/js/custom.js"></script>
</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentLocation = location.pathname.split("/")
    .pop(); // Faqat sahifa nomini oladi (masalan, about.html)
        const menuItems = document.querySelectorAll(".menu-area-main li a");

        menuItems.forEach(item => {
            // href qiymati oxiridagi fayl nomini currentLocation bilan solishtiradi
            if (item.getAttribute("href").split("/").pop() === currentLocation) {
                item.parentElement.classList.add("active");
            } else {
                item.parentElement.classList.remove("active");
            }
        });
    });
</script>
