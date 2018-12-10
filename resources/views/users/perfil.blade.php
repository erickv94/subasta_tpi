@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Mi Perfil
                </div>
                @if(session()->has('msj'))
                     <div class="alert alert-success" role="alert">{{session('msj')}}</div>
                @endif
                @if(session()->has('msj2'))
                     <div class="alert alert-danger" role="alert">{{session('msj2')}}</div>
                @endif
                <div class="card-body">
                <p><strong>Nombre: </strong>     {{ $user->name }}</p>
                <p><strong>Email: </strong>      {{ $user->email }}</p>
                <p><strong>Username: </strong>      {{ $user->username }}</p>
                <p><strong>Direccion: </strong>      {{ $user->direccion }}</p>
                @if($user->empresa)
                    @if($user->empresas->forma_juridica)
                    <p><strong>Forma Juridica: </strong>      {{ $user->empresas->forma_juridica }}</p>
                    @endif
                    @if($user->empresas->rubro)
                    <p><strong>Rubro: </strong>      {{ $user->empresas->rubro}}</p>
                    @endif
                @endif
                <p>
                <td width="8px">
                    <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('users.editProfile', $user->id) }}">
                        <i class="fas fa-save"></i> Editar Mi Perfil
                    </a>
                </td>
                <td width="8px">
                    <a type="button" class="btn btn-sm btn-success pull-right" href="{{ route('showResetPassword', $user->id) }}">
                    <i class="far fa-edit"></i> Cambiar Contraseña
                    </a>
                </td>
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection