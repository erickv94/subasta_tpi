@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Usuarios</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
            @can('users.create')
              <i class="fas fa-table"></i>
              Productos 
              <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary pull-right">
              <i class="fas fa-save"></i>Crear </a>
            @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre de Usuario</th>
                      <th>Username</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Nombre de Usuario</th>
                        <th>Username</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                          @foreach($users as $user)
                          <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->username }}</td>
                              @can('users.show')
                              <td width="8px">
                                <a type="button" class="btn btn-sm btn-info pull-right" href="{{ route('users.show', $user->id) }}">
                                  <i class="far fa-eye"></i>Ver
                                  </a>
                              </td>
                              @endcan
                              @can('users.edit')
                              <td width="8px">
                                  <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('users.edit', $user->id) }}">
                                  <i class="fas fa-save"></i> Editar
                                  </a>
                              </td>
                              @endcan
                              
                          </tr>
                          @endforeach
                      </tbody>
                </table>
                {{ $users->render() }}
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
