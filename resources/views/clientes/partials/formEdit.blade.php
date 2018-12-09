<div class="form-group">
	{{ Form::label('name', 'Nombre de Usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    @if($errors->has('name'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('name')}}
		</div>		
	@endif
</div>

<div class="form-group">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) }}
    @if($errors->has('username'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('username')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    @if($errors->has('email'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('email')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Dirección') }}
	{{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
    @if($errors->has('direccion'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('direccion')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Telefono') }}
	{{ Form::text('telefono', $user->clientes->telefono, ['class' => 'form-control', 'id' => 'telefono']) }}
    @if($errors->has('telefono'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('telefono')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('fecha_nacimiento','Fecha de Nacimiento') }}
	{{ Form::date('fecha_nacimiento', $user->clientes->fecha_nacimiento, ['class' => 'form-control', 'id' => 'fecha_nacimiento']) }}
	@if($errors->has('fecha_nacimiento'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('fecha_nacimiento')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-common log-btn']) }}
</div>
