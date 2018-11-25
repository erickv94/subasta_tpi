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
            Productos</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre de Empresa</th>
                      <th>Denominacion</th>
                      <th>Rubro</th>
                       <th>Id User</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                        <th>Nombre de Empresa</th>
                        <th>Denominacion</th>
                        <th>Rubro</th>
                        <th>Id User</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($empresas as $empresa)
                          <tr>
                              <td>{{ $empresa->id }}</td>
                              <td>{{ $empresa->code }}</td>
                              <td>{{ $empresa->name_product }}</td>
                              @can('empresas.show')
                              <td width="8px">
                                
                                  <button type="button" class="btn btn-sm btn-primary" href="{{ route('products.show', $product->id) }}">
                                    Ver
                                  </button>
                              </td>
                              @endcan
                              @can('empresas.edit')
                                  <td width="8px">
                                      <button type="button" class="btn btn-sm btn-info" href="{{ route('products.edit', $product->id) }}">
                                        Editar
                                      </button>
                              @endcan
                              @can('empresas.destroy')
                              <td width="8px">
                                  {!! Form::open(['route' => ['empresas'.destroy', $empresa->id],
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
                {{ $empresas->render() }}
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
