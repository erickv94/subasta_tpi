@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                   Detalle del producto
                </div>
                @if($producto->file_img)
                  <img src ="{{ $producto->file_img }}" class="img-responsive center-block "/>
                @endif
                <div class="card-body">
                @if(session()->has('msj'))
                     <div class="alert alert-success" role="alert">{{session('msj')}}</div>
                @endif
                <p><strong>Codigo: </strong>     {{ $producto->codigo }}</p>
                <p><strong>Nombre: </strong>     {{ $producto->nombre_producto }}</p>
                <p><strong>Descripción: </strong>  {{ $producto->descripcion }}</p> 
                <p><strong>Precio Inicial: </strong>  {{ $producto->precio_inicial }}</p>
                <p><strong>Categoria: </strong> {{ $producto->categorias->nombre_categoria }}</p>
                <p><strong>Empresa: </strong> {{ $producto->empresas->users->name}}</p>
                <p><strong>Fecha de Publicación: </strong>  {{ $producto->fecha_publicacion }}</p>
                <p><strong>Fecha de Expiración: </strong>  {{ $producto->fecha_expiracion }}</p>
                <p>
                @if($producto->publicacion)
                @can('productos.deshabilitar')
                    <td width="8px">
                        <a type="button" class="btn btn-sm  btn-warning pull-right" href="{{ route('productos.deshabilitar', $producto->id_producto) }}">
                            <i class="fas fa-lock"></i> Ocultar Producto
                        </a>
                    </td>
                @endcan
                @else
                @can('productos.habilitar')
                    <td width="8px">
                        <a type="button" class="btn btn-sm btn-success pull-right" href="{{ route('productos.habilitar', $producto->id_producto) }}">
                            <i class="fas fa-cart-plus"></i> Publicar Producto
                        </a>
                    </td>
                @endcan
                @endif
                
                @can('productos.edit')
                    <td width="8px">
                        <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('productos.edit', $producto->id_producto) }}">
                           <i class="fas fa-pencil-alt"></i>Editar Producto 
                        </a>
                    </td>
                @endcan                  
                </p>
                </div> 
                   
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
