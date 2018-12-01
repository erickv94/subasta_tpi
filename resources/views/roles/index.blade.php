@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Home</a>
  </li>
  <li class="breadcrumb-item active">Roles</li>
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
                      <th>Nombre del Rol</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                        <th>Nombre del Rol</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            @can('roles.show')
                            <td width="8px">
                              <a type="button" class="btn btn-sm btn-info pull-right" href="{{ route('roles.show', $role->id) }}">
                                <i class="far fa-eye"></i>Ver
                                </a>
                            </td>
                            @endcan
                            @can('roles.edit')
                            <td width="8px">
                                <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('roles.edit', $role->id) }}">
                                <i class="fas fa-save"></i> Editar
                                </a>
                            </td>
                            @endcan
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $roles->render() }}
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
