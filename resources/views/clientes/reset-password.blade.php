@extends('layouts.plantillaInicial')

@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Edite su contraseña</h2>
                        <ol class="breadcrumb">
                            <li class="current">Edite su contraseña</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar Mi Perfil
                </div>

                <div class="card-body">
                {!! Form::model($user, ['route' => ['updatePasswordCliente', $user->id],
                    'method' => 'PUT']) !!}

                        @include('clientes.partials.formReset')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection