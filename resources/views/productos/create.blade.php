@extends('layouts.plantillaAdmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Crear Producto
                </div>
                <div class="card-body">
                @if(session()->has('status'))
                       <div class="alert alert-info" role="alert">
                           {{session()->get('status')}}
                       </div>
                   @endif
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="login-form login-area">
                            {{ Form::open(['route' => 'productos.store', 'enctype' => 'multipart/form-data']) }}
                                @include('productos.partials.form')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
