<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/fonts/line-icons.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/slicknav.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/color-switcher.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/animate.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.carousel.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css')   }}">
        <!-- FAVICON-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png')   }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png')   }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png')   }}">
        <link rel="manifest" href="{{ asset('/favicon/site.webmanifest')   }}">
        <link rel="mask-icon" href="{{ asset('/favicon/safari-pinned-tab.svg')   }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <header id="header-wrap">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-5 col-xs-12">
                            <ul class="list-inline">
                                <li><i class="lni-phone"></i>+503 2277 8899</li>
                                <li><i class="lni-envelope"></i> sivarcachadas@gmail.com</li>
                            </ul>
                        </div>
                    <div class="col-lg-5 col-md-7 col-xs-12">
                        <div class="roof-social float-right">
                            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                            <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                            <a class="google" href="#"><i class="lni-google-plus"></i></a>
                        </div>
                    
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                    </button>
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('/assets//img/logo.png')   }}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                <?php function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                }
                ?>
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item dropdown {{activeMenu('/')}}">
                            <a class="nav-link dropdown-toggle" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item {{activeMenu('productosSubasta')}}">
                            <a class="nav-link" href="{{ url('/productosSubasta') }}">
                                Productos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            Contactanos
                            </a>
                        </li>
                        <li class="nav-item {{activeMenu('login')}}">
                            <a class="nav-link" href="{{ route('login') }}">
                            Inicio de Sesión
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Registrese
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('crearEmpresa') }}">Registrese como Empresa</a>
                            <a class="dropdown-item" href="{{ route('crearCliente') }}">Registrese como Cliente</a>
                            </div>
                        </li>
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                </div>
            </div>

            <ul class="mobile-menu">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/productosSubasta') }}">Productos</a>
                </li>
                <li>
                    <a href="">Contactanos</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Inicio de Sesión</a>
                </li>
                <li>
                    <a href="#">Registrese</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('crearEmpresa') }}">Registrese como Empresa</a></li>
                            <li><a href="{{ route('crearCliente') }}">Registrese como Cliente</a></li>
                        </ul>
                </li>
            </ul>

        </nav>

    </header>
    @yield('content')
    <footer>
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="{{ asset('assets//img/logo3.png')   }}" alt="logotipo" width="200" height="100"></div>
                        <div class="textwidget">
                        <p>Subastas Online</p>
                    </div>
                    <ul class="mt-3 footer-social">
                        <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-xs-6 col-mb-12">
                <div class="widget">
                    <h3 class="block-title">Contact Info</h3>
                        <ul class="contact-footer">
                        <li>
                            <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
                        </li>
                        <li>
                            <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9efdf1f0eafffdeadef3fff7f2b0fdf1f3">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e4979194948b9690a489858d88ca878b89">[email&#160;protected]</a></span>
                        </li>
                        <li>
                            <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
                        </li>
                        </ul>
            </div>

    </section>
            <div id="copyright">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div class="site-info text-center">
            <p><a rel="nofollow">Copyright Subasta</a></p>
            </div>
            </div>
            </div>
            </div>
            </div>

    </footer>

        <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js')   }}"></script><script src="{{ asset('assets/js/jquery-min.js')   }}"></script>
        <script src="{{ asset('assets/js/popper.min.js')   }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')   }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js')   }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js')   }}"></script>
        <script src="{{ asset('assets/js/wow.js')   }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')   }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.js')   }}"></script>
        <script src="{{ asset('assets/js/main.js')   }}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js')   }}"></script>
        <script src="{{ asset('assets/js/contact-form-script.min.js')   }}"></script>
        <script src="{{ asset('assets/js/summernote.js')   }}"></script>
    </body>
</html>
