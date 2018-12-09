<div class="form-group">
	{{ Form::label('name', 'Nombre de Usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Dirección') }}
	{{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
</div>
@if($user->empresa)
	@if($user->empresas->forma_juridica)
	<div class="form-group">
		{{ Form::label('forma_juridica', 'Forma Juridica') }}
		{{ Form::text('forma_juridica', $user->empresas->forma_juridica, ['class' => 'form-control', 'id' => 'forma_juridica']) }}
	</div>
	@endif
	@if($user->empresas->rubro)
	<div class="form-group">
		{{ Form::label('rubro', 'Rubro') }}
		{{ Form::text('rubro', $user->empresas->rubro, ['class' => 'form-control', 'id' => 'rubro']) }}
	</div>
	@endif
@endif
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>