@extends('layouts.plantillaInicial')
@section('titulo')
Sivarcachada | Login
@endsection
@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Inicio de Sesión</h2>
                        <ol class="breadcrumb">
                            <li class="current">Inicio de Sesión</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="login section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="login-form login-area">
                    <h3>Inicio de Sesión</h3>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-6 control-label">Email</label>

                            <div class="col-md-12">

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit"  style="align:center;" class="btn btn-common log-btn">
                                   Iniciar sesión
                                </button>
                            </div>
                        </div>
                            <div class="form-group col-lg-6 col-lg-offset-4">
                                <a class="forgetpassword"  href="{{ route('password.request') }}">
                                    He olvidado mi contraseña
                                </a>
                            </div>

                    </form>
                </div>
                    @if (session('info'))
                    <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="alert alert-success">
                                    {{ session('info') }}
                                </div>
                            </div>
                    </div>
                    @endif
                    @if (session('danger'))
                    <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="alert alert-danger">
                                    {{ session('danger') }}
                                </div>
                            </div>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
