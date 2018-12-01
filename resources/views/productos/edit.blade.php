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
                    {!! Form::model($producto, ['route' => ['productos.update', $producto->id_producto],
                    'method' => 'PUT']) !!}

                        @include('productos.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
