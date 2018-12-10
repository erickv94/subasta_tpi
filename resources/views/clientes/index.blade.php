@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Clientes</li>
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
              <i class="fas fa-table"></i>
            Clientes Registrados</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre del Cliente</th>
                      <th>Username</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre del Cliente</th>
                      <th>Username</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($clientes as $cliente)
                          <tr>
                              <td>{{ $cliente->name }}</td>
                              <td>{{ $cliente->username }}</td>
                              <td>{{ $cliente->telefono }}</td>
                              <td>{{ $cliente->email}}</td>
                              @if($cliente->habilitar)
                              @can('users.deshabilitar')
                                <td width="8px">
                                <a type="button" class="btn btn-sm  btn-warning pull-right" href="{{ route('clientes.deshabilitar', $cliente->id) }}">
                                <i class="far fa-tired"></i> Deshabilitar Usuario
                                  </a>
                              </td>
                              @endcan
                              @else
                              @can('users.habilitar')
                                <td width="8px">
                                  <a type="button" class="btn btn-sm btn-success pull-right" href="{{ route('clientes.habilitar', $cliente->id) }}">
                                  <i class="fas fa-smile-beam"></i >Habilitar Usuario
                                    </a>
                                </td>
                              @endcan

                              @endif
                          </tr>
                          @endforeach
                  </tbody>
                </table>
                {!! $clientes->render() !!}
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
