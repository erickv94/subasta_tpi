<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/bootstrap.min.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  asset('assets/fonts/line-icons.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/slicknav.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/color-switcher.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/animate.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/owl.carousel.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/main.css')   }}">
        <link rel="stylesheet" type="text/css" href="{{  secure_asset('assets/css/responsive.css')   }}">
        
        <!-- FAVICON-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('/favicon/apple-touch-icon.png')   }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('/favicon/favicon-32x32.png')   }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('/favicon/favicon-16x16.png')   }}">
        <link rel="manifest" href="{{ secure_asset('/favicon/site.webmanifest')   }}">
        <link rel="mask-icon" href="{{ secure_asset('/favicon/safari-pinned-tab.svg')   }}" color="#5bbad5">
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
                            <a class="instagram" href="https://www.instagram.com/sivarcachadas/?hl=es-la"  target="_blank"><i class="lni-instagram-filled"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/in/sivarcachadas-subastas-a529b9176/"  target="_blank"><i class="lni-linkedin-fill"></i></a>
                            <a class="google" href="https://plus.google.com/113205622699773326227?hl=es&pli=1"  target="_blank"><i class="lni-google-plus"></i></a>
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
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ secure_asset('/assets//img/logo.png')   }}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                <?php function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                }
                ?>
                @if (Auth::guest())
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
                            <a class="nav-link" href="/contacto">
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

                    <ul class="mobile-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/productosSubasta') }}">Productos</a>
                    </li>
                    <li>
                        <a href="/contacto">Contactanos</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Inicio de Sesión</a>
                    </li>
                    <li>
                        <a href="">Registrese</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('crearEmpresa') }}">Registrese como Empresa</a></li>
                                <li><a href="{{ route('crearCliente') }}">Registrese como Cliente</a></li>
                            </ul>
                    </li>
                    </ul>
                    @else
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
                            <a class="nav-link" href="">
                            Mis Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                            Mi Perfil
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->username }} 
                            </a>
                            <div class="dropdown-menu">
                           
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">{{ __('Logout') }}</a>
                            </div>
                        </li>
                  
                    </ul>
                    <ul class="mobile-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/productosSubasta') }}">Productos</a>
                    </li>
                    <li>
                        <a href="">Mis Productos</a>
                    </li>
                    <li>
                        <a href="">Mi Perfil</a>
                    </li>
                   
                    <li>
                        <a href="">{{ Auth::user()->username }} </a>
                            <ul class="dropdown">
                                <li><a href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">{{ __('Logout') }}</a></li>
                            </ul>
                    </li>
                    </ul>
                    @endif
                    <div class="post-btn">
                        <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                </div>
            </div>
            
            

        </nav>

    </header>
    @yield('content')
    <footer>
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="{{ secure_asset('assets/img/logo3.png')   }}" alt="logotipo" width="200" height="100"></div>
                        <div class="textwidget">
                        <p>Subastas Online</p>
                    </div>
                    <ul class="mt-3 footer-social">
                        <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/sivarcachadas/?hl=es-la"  target="_blank"><i class="lni-instagram-filled"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/in/sivarcachadas-subastas-a529b9176/"  target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                        <li><a class="google-plus" href="https://plus.google.com/113205622699773326227?hl=es&pli=1"  target="_blank"><i class="lni-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-xs-6 col-mb-12">
                <div class="widget">
                    <h3 class="block-title">Contact Info</h3>
                        <ul class="contact-footer">
                        <li>
                            <strong><i class="lni-phone"></i></strong><span>+503 2277-8899<br> +503 2277-8999</span>
                        </li>
                        <li>
                            <strong><i class="lni-envelope"></i></strong><span><a href="" class="__cf_email__">sivarcachadas@gmail.com</a></span>
                        </li>
                        <li>
                            <strong><i class="lni-map-marker"></i></strong><span><a href="#">Final 25 Avenida Norte, San Salvador
                            Universidad de El Salvador, Dirección</a></span>
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
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Ha seleccionado "Logout" desea cerrar sesión</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary"  href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
            </div>
        </div>
        </div>
    </footer>

        <script data-cfasync="false" src="{{ secure_asset('assets/js/email-decode.min.js')   }}"></script><script src="{{ secure_asset('assets/js/jquery-min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/popper.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/bootstrap.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/jquery.counterup.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/waypoints.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/wow.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/owl.carousel.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/jquery.slicknav.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/main.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/form-validator.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/contact-form-script.min.js')   }}"></script>
        <script src="{{ secure_asset('assets/js/summernote.js')   }}"></script>
    </body>
</html>
