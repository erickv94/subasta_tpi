@extends('layouts.plantillaInicial')
@section('titulo')
Sivarcachada | Producto {{$producto->nombre_producto}}
@show
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
        <p class="mb-4">{{ $producto->descripcion }}</p>
        <p>Precio: <h3 class="price float-left">${{ $producto->precio_inicial }}</h3></p>


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
      <div class="float-right">
        <div class="share">
          <div class="social-link">
            <a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook" href="#"><i class="lni-facebook-filled"></i></a>
            <a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter" href="#"><i class="lni-twitter-filled"></i></a>
            <a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
            <a class="google" data-toggle="tooltip" data-placement="top" title="google plus" href="#"><i class="lni-google-plus"></i></a>
          </div>
        </div>
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
