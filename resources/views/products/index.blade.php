@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Home</a>
  </li>
  <li class="breadcrumb-item active">Productos</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            Productos 
              <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">
              Crear
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Codigo</th>
                      <th>Nombre del Producto</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                        <th>Codigo</th>
                        <th>Nombre del Producto</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($products as $product)
                          <tr>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->code }}</td>
                              <td>{{ $product->name_product }}</td>
                              @can('products.show')
                              <td width="8px">
                                  <button type="button" class="btn btn-sm btn-primary" href="{{ route('products.show', $product->id) }}">
                                    Ver
                                  </button>
                              </td>
                              @endcan
                              @can('products.edit')
                                  <td width="8px">
                                      <button type="button" class="btn btn-sm btn-info" href="{{ route('products.edit', $product->id) }}">
                                        Editar
                                      </button>
                              @endcan
                              @can('products.destroy')
                              <td width="8px">
                                  {!! Form::open(['route' => ['products.destroy', $product->id],
                                  'method' => 'DELETE']) !!}
                                      <button class="btn btn-sm btn-danger">
                                          Eliminar
                                      </button>
                                  {!! Form::close() !!}
                              </td>
                              @endcan
                          </tr>
                          @endforeach
                  </tbody>
                </table>
                {{ $products->render() }}
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
