@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                   Detalle de Categoria
                </div>
                <div class="card-body">
                @if(session()->has('msj'))
                    <div class="alert alert-success" role="alert">{{session('msj')}}</div>
                @endif
                    <p><strong>Nombre</strong>     {{ $categoria->nombre_categoria }}</p>
                    <p><strong>Slug</strong>       {{ $categoria->slug }}</p>
                    <p><strong>Descripción</strong>  {{ $categoria->descripcion }}</p> 
                    <p>
                    @can('categorias.edit')
                        <td width="8px">
                                <a type="button" class="btn btn-sm btn-primary pull-right" href="{{ route('categorias.edit', $categoria->slug) }}">
                                    <i class="fas fa-pencil-alt"></i> Editar Categoria
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