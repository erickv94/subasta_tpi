@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Empresa
                </div>
                <div class="card-body">
                <p><strong>Nombre: </strong>     {{ $empresa->users->name }}</p>
                <p><strong>Email: </strong>      {{ $empresa->users->email }}</p>
                <p><strong>Username: </strong>      {{ $empresa->users->username }}</p>
                <p><strong>Direccion: </strong>      {{$empresa->users->direccion }}</p>
                <p><strong>Rubro: </strong>      {{$empresa->rubro }}</p>
                <p><strong>Forma Juridica: </strong>      {{$empresa->forma_juridica }}</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection