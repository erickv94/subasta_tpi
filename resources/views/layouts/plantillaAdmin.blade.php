<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{--OPG Y Twitter Cards--}}
    <meta property="og:url"          content="http://http://sivarcachadas.herokuapp.com/" />
    <meta property="og:type"         content="website" />
    <meta property="og:title"        content="Panel de Administracion" />
    <meta property="og:description"  content="Panel de administracion del sistema de subastas en linea" />
    <meta property="og:image"        content="/public/assets/img/panel-admin-opg.jpeg" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Sivarchadas">
    <meta name="twitter:creator" content="@sivarchadas">
    <!--url de la página-->
    <meta name="twitter:url" content="http://sivarcachadas.herokuapp.com/">
    <!--Título de la página-->
    <meta name="twitter:title" content="Panel de Administracion">
    <!--Descripción de la página-->
    <meta name="twitter:description" content="Somos una empresa que permite que otras empresas entren en el mercado de las subastas en linea de una forma rapida y facil">
    <!--Imagen para compartir-->
    <meta name="twitter:image" content="/public/assets/img/panel-admin-opg.jpeg">
    <title>Panel de Administración de Productos</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css')   }}">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css')   }}">

    <!-- Page level plugin CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.css')   }}">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/sb-admin.css')   }}">
    <!-- FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png')   }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png')   }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png')   }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest')   }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg')   }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Panel de Administración</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">


        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->username}}
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('users.showProfile',Auth::user()->id) }}">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"  data-toggle="modal" data-target="#logoutModal">
                {{ __('Logout') }}
            </a>

          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">
      <?php function activeMenu($url){
         return request()->is($url) ? 'active' : '';
      }
      ?>
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item {{activeMenu('home')}}">
          <a class="nav-link " href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        @can('users.index')
        <li class="nav-item {{activeMenu('users')}}">
          <a class="nav-link" href="{{ route('users.index') }}">
          <i class="fas fa-users"></i>
            <span>Usuarios</span></a>
        </li>
        @endcan
        @can('roles.index')
        <li class="nav-item {{activeMenu('roles')}}">
          <a class="nav-link" href="{{ route('roles.index') }}">
           <i class="fas fa-chalkboard-teacher"></i>
            <span>Roles</span></a>
        </li>
        @endcan
        @can('categorias.index')
        <li class="nav-item {{activeMenu('categorias')}}">
          <a class="nav-link" href="{{ route('categorias.index') }}">
          <i class="fas fa-poll-h"></i>
            <span>Categorias</span></a>
        </li>
        @endcan
        @can('productos.index')
        <li class="nav-item {{activeMenu('productos')}}">
          <a class="nav-link" href="{{ route('productos.index') }}">
            <i class="fas fa-business-time"></i>
            <span>Productos</span></a>
        </li>
        @endcan
        @can('empresas.index')
        <li class="nav-item {{activeMenu('empresas')}}">
          <a class="nav-link" href="{{ route('empresas.index') }}">
          <i class="fas fa-city"></i>
            <span>Empresas</span></a>
        </li>
        @endcan
        @can('clientes.index')
        <li class="nav-item {{activeMenu('clientes')}}">
          <a class="nav-link" href="{{ route('clientes.index') }}">
          <i class="fas fa-tags"></i>
            <span>Clientes</span></a>
        </li>
        @endcan
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © sivarcachadas subastas 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js')   }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')   }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')   }}"></script>

    <!-- Page level plugin JavaScript-->
    <script src=" {{ asset('admin/vendor/datatables/jquery.dataTables.js')   }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.js')   }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin.min.js')   }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('admin/js/demo/datatables-demo.js')   }}"></script>

  </body>

</html>
