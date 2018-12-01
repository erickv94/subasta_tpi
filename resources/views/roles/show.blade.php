@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                   Detalle del Rol
                </div>
                <div class="card-body">
                @if(session()->has('msj'))
                     <div class="alert alert-success" role="alert">{{session('msj')}}</div>
                @endif
                    <p><strong>Nombre</strong>     {{ $role->name }}</p>
                    <p><strong>Slug</strong>       {{ $role->slug }}</p>
                    <p><strong>Descripción</strong>  {{ $role->description }}</p> 
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
