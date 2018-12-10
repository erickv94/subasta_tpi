@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Categorias</li>
</ol>
@if(session()->has('msj'))
<div class="alert alert-success" role="alert">{{session('msj')}}</div>
@endif
@if(session()->has('msj2'))
<div class="alert alert-warning" role="alert">{{session('msj2')}}</div>
@endif
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

                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($compras as $compra)
                          <tr>


                          </tr>
                          @endforeach
                  </tbody>
                </table>
                {!! $compras->render() !!}
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
