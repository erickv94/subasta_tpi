@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Home</a>
  </li>
  <li class="breadcrumb-item active">Usuarios</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            Usuarios</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre de Usuario</th>
                      <th>Username</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                        <th>Nombre de Usuario</th>
                        <th>Username</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                          @foreach($users as $user)
                          <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->username }}</td>
                              @can('users.show')
                              <td width="10px">
                                  <button type="button" class="btn btn-sm btn-primary" href="{{ route('users.show', $user->id) }}">
                                    Ver
                                  </button>
                              </td>
                              @endcan
                              @can('users.edit')
                              <td width="10px">
                                <button type="button" class="btn btn-sm btn-info" href="{{ route('users.edit', $user->id) }}">
                                  Editar
                                </button>
                              </td>
                              @endcan
                              @can('users.destroy')
                              <td width="10px">
                                  {!! Form::open(['route' => ['users.destroy', $user->id],
                                  'method' => 'DELETE']) !!}
                                      <button type="button" class="btn btn-sm btn-danger">
                                          Eliminar
                                      </button>
                                  {!! Form::close() !!}
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
