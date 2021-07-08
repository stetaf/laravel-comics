<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Comics</title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
                        <img src="./img/dc-logo.png" alt="">
                    </div>
                    <div class="menu">
                        <a href="#">Characters</a>
                        <a href="#" class="active">Comics</a>
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
    <footer></footer>
    <!-- /Footer -->
</body>

</html>