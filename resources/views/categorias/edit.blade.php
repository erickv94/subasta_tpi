@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar Producto
                </div>

                <div class="card-body">
                    {!! Form::model($categoria, ['route' => ['categorias.update', $categoria->id_categoria],
                    'method' => 'PUT']) !!}

                        @include('categorias.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
