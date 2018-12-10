@extends('layouts.plantillaInicial')
@section('titulo')
Sivarcachada | Resultado Busqueda
@endsection

@section('content')
<section class="featured section-padding">
    <div class="container">
        <h1 class="section-title">Resultados</h1>

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
