@extends('layouts.plantillaAdmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Crear Producto
                </div>

                <div class="card-body">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="login-form login-area">
                            {{ Form::open(['route' => 'products.store']) }}
                                @include('products.partials.form')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
