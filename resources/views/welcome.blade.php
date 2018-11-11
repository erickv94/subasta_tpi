<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-switcher.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')   }}">
    </head>
    <body>
        <header id="header-wrap">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-5 col-xs-12">
                            <ul class="list-inline">
                                <li><i class="lni-phone"></i> +0123 456 789</li>
                                <li><i class="lni-envelope"></i> <a href="#" class="__cf_email__" data-cfemail="fb888e8b8b94898fbb9c969a9297d5989496">[email&#160;protected]</a></li>
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
                    <div class="header-top-right float-right">
                        <a href="login.html" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                        <a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a>
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
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="{{ url('/') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">
                                ¿Quienes Somos?
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            Contactanos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                            Log in
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                            Registrese
                            </a>
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
                    <a href="">¿Quienes Somos?</a>
                </li>
                <li>
                    <a href="">Contactanos</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Log in</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Registrese</a>
                </li>
            </ul>

        </nav>
        <div id="hero-area">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                        <div class="contents">
                            <h1 class="head-title">Bienvenido a Subastas En linea <span class="year">Marketplace</span></h1>
                            <p>Debe estar registrado para poder comprar un producto pero puede revisar la lista de productos</p>
                            <div class="search-bar">
                                <div class="search-inner">
                                    <form class="search-form">
                                        <div class="form-group">
                                            <input type="text" name="customword" class="form-control" placeholder="What are you looking for?">
                                        </div>
                                            <div class="form-group inputwithicon">
                                                <div class="select">
                                                    <select>
                                                        <option value="none">Locación</option>
                                                        <option value="none">Sonsonate</option>
                                                        <option value="none">San Salvador</option>
                                                        <option value="none">Santa Ana</option>
                                                        <option value="none">San Miguel</option>
                                                    </select>
                                                </div>
                                                 <i class="lni-target"></i>
                                            </div>
                                            <div class="form-group inputwithicon">
                                                    <div class="select">
                                                        <select>
                                                            <option value="none">Seleccione Categoria</option>
                                                            <option value="none">Carro</option>
                                                            <option value="none">Muebles</option>
                                                            <option value="none">Pinturas</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <i class="lni-menu"></i>
                                            </div>
                                            <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="about-wrapper">
                        <h2 class="intro-title">Quienes Somos</h2>
                        <p class="intro-desc">
                        Es una empresa que permite a los usuarios comprar con las reglas de subasta en el área de El Salvador,
                         haciendo uso de las tecnologías relativas al desarrollo
                         y permitiendo la semántica del contenido para el desarrollo y posicionamiento.
                        </p>
                        <p class="intro-desc">
                        Somos expertos en servicios de intermediación y facilitación de ventas de productos por medio de subastas 
                        online en España. Contamos con especialización en venta de activos, bienes inmuebles, maquinaria, vehículos
                         y empresas. Disponemos de los mejores contactos y la mejor agenda para poner a tu disposición subastas judiciales online, subastas embargo y venta de bienes oficiales con énfasis empresarial.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="{{asset('assets/img/about/about.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="assets/img/logo.png" alt=""></div>
                        <div class="textwidget">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
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
            <p><a href="https://templatespoint.net/" rel="nofollow">Copyright Subasta</a></p>
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