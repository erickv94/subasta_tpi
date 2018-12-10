@extends('layouts.plantillaInicial')
@section('titulo')
Sivarcachada | Producto {{$producto->nombre_producto}}
@endsection
@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Detalles del Producto:  {{ $producto->nombre_producto }}</h2>
                        <ol class="breadcrumb">
                            <li class="current">Detalles</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-padding">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">{{session('success')}}</div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger" role="alert">{{session('error')}}</div>
    @endif
<div class="container">

<div class="product-info row">
  <div class="col-lg-8 col-md-12 col-xs-12">
    <div class="ads-details-wrapper">
    <div class="product-img">
      @if($producto->file_img)
        <img src ="{{ $producto->file_img }}" class="img-fluid"/>
      @endif
    </div>

    </div>
    <div class="details-box">
      <div class="ads-details-info">
        <h2> {{ $producto->nombre_producto }}</h2>
        <div class="details-meta">
          <span><i class="lni-alarm-clock"></i>  {{ $producto->created_at }}</span>

          <span><i class="lni-user"></i>{{ $producto->empresas->users->name }}

        </div>
        <p>Fecha expiracion: <span><i class="lni-alarm-clock"></i>  {{ $producto->fecha_expiracion }}</span> </p>
        <p class="mb-4">{{ $producto->descripcion }}</p>
        <p>Precio inicial: <h3 class="price ">${{ $producto->precio_inicial }}</h3></p>
        @if(isset($apuesta))
        <p>Precio Actual: <h3 class="price "> ${{$apuesta}} </h3></p>
        @else
        <p> Nadie a apostado aun </p>
        @endif
        <form class="form" method="POST" action="/detalle/apostar">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Propuesto: </label>

                <div class="col-md-12">

                    <input id="valor" type="number" class="form-control" name="valor" min=0 >
                    <input type="hidden" name="id" value="{{$producto->id_producto}}">

                </div>
            </div>


            <div class="form-group">
                <div class="col-md-3 col-md-offset-4">
                    <button type="submit" style="align:center;" class="btn btn-common ">
                       Ofrecer
                    </button>
                </div>
            </div>


        </form>
    </div>
    <div class="tag-bottom">
      <div class="float-left">
        <ul class="advertisement">
          <li>
            <p><strong><span><i class="lni-user"></i>Empresa:</strong> {{ $producto->empresas->users->name }}</p>
          </li>
          <li>
            <p><strong><span><i class="fas fa-folder-open"></i>Categoria:</strong> {{ $producto->categorias->nombre_categoria }}</p>
          </li>
          <li>
            <p><strong><span><i class="fas fa-arrow-alt-circle-down"></i>Nombre:</strong> {{ $producto->nombre_producto }}</p>
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
  <div class="widget">
    <h4 class="widget-title">Información de la Empresa</h4>
    <div class="agent-inner">
      <div class="agent-title">
        <div class="agent-photo">
        @if($producto->file_img)
          <img src ="{{ $producto->empresas->users->file_img }}" class="img-fluid"/>
        @endif
        </div>
        <div class="agent-details">
          <h3>{{ $producto->empresas->users->name}}</h3>
          <span>{{ $producto->empresas->users->direccion}}</span>
        </div>
      </div>

      <p>Rubro: {{ $producto->empresas->rubro}}</p>
      <button class="btn btn-common fullwidth mt-4">Detalles de la Empresa</button>
    </div>
  </div>


</aside>

</div>
</div>

</div>
</div>

@endsection
