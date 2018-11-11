@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Detalle del producto
                </div>
                <div class="card-body">
                <p><strong>Codigo</strong>     {{ $product->code }}</p>
                <p><strong>Nombre</strong>     {{ $product->name_product }}</p>
                <p><strong>Descripción</strong>  {{ $product->description_product }}</p> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
