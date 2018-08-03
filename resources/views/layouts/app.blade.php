<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Poppy Seed | @yield('title')</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('styles')
</head>

<body>
    <!--banner-->
    <section id="banner">
        <div class="bg-color">
            <header id="header">
                <div class="container">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#about"><i class="fas fa-coffee"></i> About</a>
                        <a href="#event"><i class="fas fa-calendar-alt"></i> Event</a>
                        <a href="#menu-list"><i class="fas fa-book-open"></i> Menu</a>
                        <a href="#contact"><i class="fas fa-pencil-alt"></i> Book a table</a>
                        @if(Auth::user())
                            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                            <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        @else
                            <a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
                            <a href="{{route('register')}}"><i class="fas fa-user-plus"></i> Register</a>
                        @endif
                    </div>
                    <span onclick="openNav()" class="pull-right menu-icon">☰</span>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="inner text-center">
                        <h1 class="logo-name">The Poppy Seed</h1>
                        <hr style="width:40%;">
                        <h2>A cute and vibrant cafe,</h2>
                        <p>with a touch of Belvoir.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    <!-- footer -->
    <footer class="footer text-center">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="widget">
                        <h4 class="widget-title">The Poppy Seed</h4>
                        <address>12 Queen St<br>Bottesford, Nottingham<br>NG13 0AH</address>
                        <div class="social-list">
                            <a href="https://www.facebook.com/thepoppyseed1/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright clear-float">
                        © The Poppy Seed {{ now()->year }}. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('contactform/contactform.js')}}"></script>
    @yield('scripts')
</body>

</html>