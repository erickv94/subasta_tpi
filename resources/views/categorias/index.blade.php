@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Categorias</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
            @can('categorias.create')
              <i class="fas fa-table"></i>
                Categorias
              <a href="{{ route('categorias.create') }}" class="btn btn-sm btn-primary pull-right">
              <i class="fas fa-save"></i>Crear
            @endcan
            </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre de la Categoria</th>
                      <th>Slug</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Nombre de la Categoria</th>
                      <th>Slug</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($categorias as $categoria)
                          <tr>
                              <td>{{ $categoria->nombre_categoria }}</td>
                              <td>{{ $categoria->slug }}</td>
                              @can('categorias.show')
                                <td width="8px">
                                <a type="button" class="btn btn-sm btn-info pull-right" href="{{ route('categorias.show', $categoria->slug) }}">
                                    <i class="far fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                              @can('categorias.edit')
                                <td width="8px">
                                    <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('categorias.edit', $categoria->slug) }}">
                                    <i class="fas fa-pencil-alt"></i> 
                                    </a>
                                </td>
                               @endcan
                          </tr>
                          @endforeach
                  </tbody>
                </table>
                {{ $categorias->render() }}
              </div>
            </div>
          </div>
         
        </div>
        <!-- /.container-fluid -->
@endsection
