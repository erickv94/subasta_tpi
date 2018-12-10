@extends('layouts.plantillaInicial')
@section('titulo')
Sivarcachada | Productos
@endsection
@section('content')
<div id="hero-area">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                        <div class="contents">
                            <h1 class="head-title">Bienvenido a Subastas En linea <span class="year">Sivarchadas</span></h1>
                            <p>Debe estar registrado para poder comprar un producto pero puede revisar la lista de productos</p>
                            <div class="search-bar">
                                <div class="search-inner">
                                    <form class="search-form" action="/producto-busqueda" method='GET'>
                                        <div class="form-group">
                                            <input type="text" name="palabra" class="form-control"
                                            placeholder="¿Que esta Buscando?" required>
                                        </div>

                                            <div class="form-group inputwithicon">
                                                    <div class="select">
                                                    <select name="categorias" id="categorias" >
                                                      <option value="" disabled selected>Seleccione una categoria</option>
                                                        @foreach($categorias as $categoria)
                                                        <option value="{{$categoria->id_categoria}} ">{{$categoria->nombre_categoria}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                            <i class="lni-menu"></i>
                                            </div>
                                            <button class="btn btn-common" type="submit"><i class="lni-search"></i> Buscar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="featured section-padding">
    <div class="container">
        <h1 class="section-title">Productos</h1>

        <div class="row">
        @foreach($productos as $product)
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
            <div class="featured-box">
              <figure>
                @if($product->file_img)
                  <img src ="{{ $product->file_img }}"  img class="img-fluid"/>
                @endif
              </figure>
              <div class="feature-content">
                <div class="product">
                {{ $product->Categorias->nombre_categoria }}
                </div>
                <h4>{{ $product->nombre_producto }}.</h4>
                <div class="meta-tag">
                  <span>
                   <i class="lni-user"></i>{{ $product->empresas->users->name }}
                  </span>
                  <span>
                    <i class="fas fa-at"></i>{{ $product->empresas->users->email }}
                  </span>
                  <span>
                    <i class="lni-tag"></i> {{ $product->nombre_producto }}
                  </span>
                </div>
                <p class="dsc">Fecha de Expiración: {{ $product->fecha_expiracion }}</p>
                <div class="listing-bottom">
                  <h3 class="price float-left">${{ $product->precio_inicial }}</h3>
                  <a href="{{ route('detalleProducto', $product->slug) }}" class="btn btn-common float-right">Detalles</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      {{ $productos->render() }}
    </div>
  </div>

</section>

@endsection
