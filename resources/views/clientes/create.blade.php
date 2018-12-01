@extends('layouts.plantillaInicial')

@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Registro de Clientes</h2>
                        <ol class="breadcrumb">
                            <li class="current">Registrese</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="register section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="login-form login-area">
                    <h3>{{ __('Registro para Clientes') }}</h3>
                    <br>
                    {{ Form::open(['route' => 'clientes.store']) }}
                        @include('clientes.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
@endsection
