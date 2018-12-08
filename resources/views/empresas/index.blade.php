@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Empresas</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            Empresas Registradas</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre de Empresa</th>
                      <th>Denominacion</th>
                      <th>Rubro</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre de Empresa</th>
                      <th>Forma Juridica</th>
                      <th>Rubro</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($empresas as $empresa)
                          <tr>
                              <td>{{ $empresa->name }}</td>
                              <td>{{ $empresa->forma_juridica }}</td>
                              <td>{{ $empresa->rubro }}</td>
                              @can('empresas.show')
                              <td width="8px">
                                  <a type="button" class="btn btn-sm btn-info pull-right" href="{{ route('empresas.show', $empresa->id_empresa) }}">
                                  <i class="far fa-eye"></i>Ver
                                  </a>
                              </td>
                              @endcan
                              @if($empresa->habilitar)
                              @can('users.deshabilitar')
                                <td width="8px">
                                <a type="button" class="btn btn-sm  btn-warning pull-right" href="{{ route('empresas.deshabilitar', $empresa->id) }}">
                                <i class="far fa-tired"></i> Deshabilitar Usuario
                                  </a>
                              </td>
                              @endcan
                              @else
                              @can('users.habilitar')
                                <td width="8px">
                                  <a type="button" class="btn btn-sm btn-success pull-right" href="{{ route('empresas.habilitar', $empresa->id) }}">
                                  <i class="fas fa-smile-beam"></i> Habilitar Usuario
                                    </a>
                                </td>
                                @endcan
                              @endif
                          </tr>
                          @endforeach
                  </tbody>
                </table>
                {{ $empresas->render() }}
              </div>
            </div>
          </div>
          @if(session()->has('msj'))
                <div class="alert alert-success" role="alert">{{session('msj')}}</div>
           @endif
           @if(session()->has('msj2'))
                <div class="alert alert-warning" role="alert">{{session('msj2')}}</div>
           @endif
        </div>
        <!-- /.container-fluid -->
@endsection
