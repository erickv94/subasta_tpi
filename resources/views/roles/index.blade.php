@extends('layouts.plantillaAdmin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/home">Home</a>
  </li>
  <li class="breadcrumb-item active">Roles</li>
</ol>
    <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
            @can('roles.create')
              <i class="fas fa-table"></i>
               Roles
               <a href="{{ route('roles.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                </a>
            @endcan
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre del Rol</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Nombre del Rol</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            @can('roles.show')
                            <td width="8px">
                              <a type="button" class="btn btn-sm btn-info pull-right" href="{{ route('roles.show', $role->slug) }}">
                                <i class="far fa-eye"></i>Ver
                                </a>
                            </td>
                            @endcan
                            @can('roles.edit')
                            <td width="8px">
                                <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('roles.edit', $role->slug) }}">
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
