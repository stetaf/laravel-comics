<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==' crossorigin='anonymous' />
</head>

<body>
    <!-- Header -->
    <header>
        <div class="upper">
            <div class="container">
                <div class="links">
                    <a href="#">DC POWER&trade; VISA&reg;</a>
                    <a href="#">
                        ADDITIONAL DC SITES
                        <i class="fas fa-sort-down"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="nav">
                    <div class="logo">
                        <a href="/"><img src="{{asset('img/dc-logo.png')}}" alt=""></a>
                    </div>
                    <div class="menu">
                        <a href="#">Characters</a>
                        <a href="#" class="{{ (request()->routeIs('home') || request()->routeIs('comic')) ? 'active' : '' }}">Comics</a>
                        <a href="#">Movies</a>
                        <a href="#">Tv</a>
                        <a href="#">Games</a>
                        <a href="#">Collectibles</a>
                        <a href="#">Videos</a>
                        <a href="#">Fans</a>
                        <a href="#">News</a>
                        <a href="#">Shop</a>
                    </div>
                    <div class="search">
                        <input type="text" name="search" id="search" value="Search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Main -->
    <main>
    @yield('main')
    </main>
    <!-- /Main -->
    
    <!-- Footer -->
    <footer>
        <div class="upper">
            <div class="container">
                <div class="menus">
                    <div>
                        <div class="first">
                            <h2>DC Comics</h2>
                            <a href="#">Characters</a>
                            <a href="#">Comics</a>
                            <a href="#">Movies</a>
                            <a href="#">TV</a>
                            <a href="#">Games</a>
                            <a href="#">Videos</a>
                            <a href="#">News</a>
                            <h2 style="margin-top:25px">Shop</h2>
                            <a href="#">Shop DC</a>
                            <a href="#">Shop DC Collectibles</a>
                        </div>
                        <div class="second">
                            <h2>Dc</h2>
                            <a href="#">Term Of Use</a>
                            <a href="#">Privacy policy (New)</a>
                            <a href="#">Ad Choices</a>
                            <a href="#">Advertising</a>
                            <a href="#">Jobs</a>
                            <a href="#">Subscriptions</a>
                            <a href="#">Talent Workshops</a>
                            <a href="#">CSPC Certificates</a>
                            <a href="#">Ratings</a>
                            <a href="#">Shop Help</a>
                            <a href="#">Contact Us</a>
                        </div>
                        <div class="third">
                            <h2>Sites</h2>
                            <a href="#">DC</a>
                            <a href="#">MAD Magazine</a>
                            <a href="#">DC Kids</a>
                            <a href="#">DC Universe</a>
                            <a href="#">DC Power Visa</a>
                        </div>
                    </div>
                    <p>All site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <br> <a href="#">Cookie settings</a></p>
                </div>
                <div class="dc_logo"></div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="sign_up">
                    <a href="#"><span>Sign-up now!</span></a>
                </div>
                <div class="socials">
                    <span>Follow us</span>
                    <a href="#">
                        <img src="../img/footer-facebook.png" alt="Facebook icon">
                    </a>
                    <a href="#">
                        <img src="../img/footer-twitter.png" alt="Twitter icon">
                    </a>
                    <a href="#">
                        <img src="../img/footer-youtube.png" alt="Youtube icon">
                    </a>
                    <a href="#">
                        <img src="../img/footer-pinterest.png" alt="Pinterest icon">
                    </a>
                    <a href="#">
                        <img src="../img/footer-periscope.png" alt="Periscope icon">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
</body>
</html>