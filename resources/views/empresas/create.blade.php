@extends('layouts.plantillaInicial')
@section('titulo')
    Sivarcachada | Registro de empresa
@endsection
@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Registro de Empresas</h2>
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
                    <h3>{{ __('Registro para Empresas') }}</h3>
                    <br>
                    {{ Form::open(['route' => 'empresas.store']) }}
                        @include('empresas.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
@endsection
