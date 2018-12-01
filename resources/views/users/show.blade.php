@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Usuario
                </div>

                <div class="card-body">
                <p><strong>Nombre: </strong>     {{ $user->name }}</p>
                <p><strong>Email: </strong>      {{ $user->email }}</p>
                <p><strong>Username: </strong>      {{ $user->username }}</p>
                <p><strong>Direccion: </strong>      {{ $user->direccion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection