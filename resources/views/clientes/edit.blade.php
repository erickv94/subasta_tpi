@extends('layouts.plantillaInicial')

@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Edite su perfil</h2>
                        <ol class="breadcrumb">
                            <li class="current">Edite perfil</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="login section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div class="login-form login-area">
                    <h3>{{ __('Edición de mi Perfil') }}</h3>
                   
                    <br>
                    {!! Form::model($user, ['route' => ['clientes.update', $user->id],
                    'method' => 'PUT','files' => true, 'role' =>'form','class' => 'login-form']) !!}

                        @include('clientes.partials.formEdit')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
@endsection
