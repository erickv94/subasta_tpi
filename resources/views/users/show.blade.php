@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Usuario
                </div>
                @if(session()->has('msj'))
                     <div class="alert alert-success" role="alert">{{session('msj')}}</div>
                @endif
                <div class="card-body">
                <p><strong>Nombre: </strong>     {{ $user->name }}</p>
                <p><strong>Email: </strong>      {{ $user->email }}</p>
                <p><strong>Username: </strong>      {{ $user->username }}</p>
                <p><strong>Direccion: </strong>      {{ $user->direccion }}</p>
                <p>
                @can('users.edit')
                    <td width="8px">
                        <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('users.edit', $user->id) }}">
                        <i class="fas fa-save"></i> Editar
                         </a>
                    </td>
                @endcan
                
                </p>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection