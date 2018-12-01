@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar Rol
                </div>

                <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('roles.partials.form')
                        
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection