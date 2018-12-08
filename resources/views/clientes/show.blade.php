@extends('layouts.plantillaInicial')

@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Mi Perfil</h2>
                        <ol class="breadcrumb">
                            <li class="current">Mi Perfil</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
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
                <div class="card-body">
                <p ><strong>Nombre: </strong>     {{ $user->name }}</p>
                <p><strong>Email: </strong>      {{ $user->email }}</p>
                <p><strong>Username: </strong>      {{ $user->username }}</p>
                <p><strong>Direccion: </strong>      {{ $user->direccion }}</p>
                @if($user->clientes->telefono)
                <p><strong>Telefono: </strong>      {{ $user->clientes->telefono }}</p>
                @endif
                @if($user->clientes->fecha_nacimiento)
                <p><strong>Fecha de Nacimiento: </strong>      {{ $user->clientes->fecha_nacimiento}}</p>
                @endif
 
                <td width="8px">
                    <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('clientes.edit',  auth()->user()->id) }}">
                        <i class="fas fa-save"></i> Editar Mi Perfil
                    </a>
                </td>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection