<!doctype html>
<html lang="en">


<!-- Mirrored from demo-noonpost.assiagroupe.net/html/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:46:54 GMT -->
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ blogInfo()->blog_description }}">
    <meta name="author" content="{{ blogInfo()->blog_name }}">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="{{ blogInfo()->blog_favicon }}">

    <!-- Title -->
    <title>@yield('pageTitle')</title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/front/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/front/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/front/css/swiper.min.css">

    <link rel="stylesheet" href="/jquery-ui-1.13.2/jquery-ui.min.css">
    <link rel="stylesheet" href="/jquery-ui-1.13.2/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/jquery-ui-1.13.2/jquery-ui.theme.min.css">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="/front/css/style.css">
    <link rel="stylesheet" type="text/css" href="/front/css/custom.css">
</head>

<body>
        <!-- wrapper -->
    <div id="wrapper" class="wrapper">
        <!--loading -->
        <div class="loading">
            <div class="circle"></div>
        </div>
        <!--/-->
        
        @include('front.layouts.inc.header')

        <main class="main">
        
            <!--grid-layout-->
            <section class="mt-90">
                <div class="container-wrap">
                    @yield('content')
                </div>
            </section>
            <!--/-->

            <!--newslettre-->
            <section class="newslettre">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-10 col-sm-11 m-auto">
                            <div class="newslettre-width text-center">
                                <div class="newslettre-info">
                                    <h3 class="title">
                                        Get The Best Blog Stories into Your inbox!</h3>
                                    <p> Sign up for free and be the first to get notified about new posts. </p>
                                </div>
                                <form action="#" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                                        </div>
                                        <button class="submit-btn" type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="social-icones">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>Facebook</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>Twitter </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>Instagram </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>Youtube</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </section>
        </main>


    
        @include('front.layouts.inc.footer')

        <!--Search-form-->
        <div class="search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                        <div class="search-width  text-center">
                            <button type="button" class="close">
                                <i class="fas fa-times"></i>
                            </button>
                            <form class="search-form" action="#">
                                <input type="search" value="" placeholder="What are you looking for?">
                                <button type="submit" class="search-btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--/-->
    </div>

    
    <!--plugins -->
    <script src="/front/js/jquery.min.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>
    <script src="/front/js/popper.min.js"></script>
    <script src="/front/js/swiper.min.js"></script>
    <script src="/front/js/masonry.min.js"></script>
    <script src="/front/js/theia-sticky-sidebar.min.js"></script>
    <script src="/front/js/ajax-contact.js"></script>
    <script src="/front/js/switch.js"></script>

    <script src="/jquery-ui-1.13.2/jquery-ui.js"></script>

    <!-- JS main  -->
    <script src="/front/js/main.js"></script>


</body>


<!-- Mirrored from demo-noonpost.assiagroupe.net/html/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:47:16 GMT -->
</html>