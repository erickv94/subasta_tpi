@extends('layouts.plantillaAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar Mi Perfil
                </div>

                <div class="card-body">
                {!! Form::model($user, ['route' => ['users.updateProfile', $user->id],
                    'method' => 'PUT']) !!}

                        @include('users.partials.formPerfil')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
