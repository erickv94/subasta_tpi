<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('old_password', null, ['class' => 'form-control', 'id' => 'password']) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Nueva Contraseña') }}
	{{ Form::password('new_password', null, ['class' => 'form-control', 'id' => 'password']) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Confime Contraseña') }}
	{{ Form::password('new_password', null, ['class' => 'form-control', 'id' => 'password']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>