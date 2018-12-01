@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Productos</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
            @can('productos.create')
              <i class="fas fa-table"></i>
              Productos 
              <a href="{{ route('productos.create') }}" class="btn btn-sm btn-primary pull-right">
              <i class="fas fa-save"></i>Crear
            @endcan
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Categoria</th>
                      <th>Nombre del Producto</th>
                      <th>Fecha Publicacion</th>
                      <th>Fecha Expiracion</th>
                      <th colspan="5">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Categoria</th>
                        <th>Fecha Publicacion</th>
                        <th>Fecha Expiracion</th>
                        <th colspan="5">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($productos as $product)
                          <tr>
                              <td>{{ $product->Categorias->nombre_categoria }}</td>
                              <td>{{ $product->nombre_producto }}</td>
                              <td>{{ $product->fecha_publicacion }}</td>
                              <td>{{ $product->fecha_expiracion }}</td>
                              @can('productos.show')
                              <td width="8px">
                                <a type="button" class="btn btn-sm btn-info pull-right" href="{{ route('productos.show', $product->slug) }}">
                                  <i class="far fa-eye"></i>
                                  </a>
                              </td>
                              @endcan
                              @can('productos.edit')
                              <td width="8px">
                                  <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('productos.edit', $product->id_producto) }}">
                                  <i class="fas fa-pencil-alt"></i> 
                                  </a>
                              </td>
                              @endcan
                             
                              @can('productos.destroy')
                              <td width="8px">
                                  {!! Form::open(['route' => ['productos.destroy', $product->id_producto],
                                  'method' => 'DELETE']) !!}
                                      <button class="btn btn-sm btn-danger pull-right">
                                      <i class="fa fa-trash"></i>
                                      </button>
                                  {!! Form::close() !!}
                              </td>
                              @endcan
                              @if($product->publicacion)
                              @can('productos.deshabilitar')
                                <td width="8px">
                                <a type="button" class="btn btn-sm  btn-warning pull-right" href="{{ route('productos.deshabilitar', $product->id_producto) }}">
                                <i class="fas fa-lock"></i>
                                  </a>
                              </td>
                              @endcan
                              @else
                              @can('productos.habilitar')
                                <td width="8px">
                                  <a type="button" class="btn btn-sm btn-success pull-right" href="{{ route('productos.habilitar', $product->id_producto) }}">
                                  <i class="fas fa-cart-plus"></i>
                                    </a>
                                </td>
                                @endcan
                              @endif
                          </tr>
                          @endforeach
                  </tbody>
                </table>
                {{ $productos->render() }}
              </div>
            </div>
          </div>
          @if(session()->has('msj'))
                <div class="alert alert-success" role="alert">{{session('msj')}}</div>
           @endif
           @if(session()->has('msj2'))
                <div class="alert alert-danger" role="alert">{{session('msj2')}}</div>
           @endif
        </div>
        <!-- /.container-fluid -->
@endsection
