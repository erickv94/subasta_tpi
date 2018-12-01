@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Crear Rol
                </div>

                <div class="card-body">
                {{ Form::open(['route' => 'roles.store']) }}

                    @include('roles.partials.form')

                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
