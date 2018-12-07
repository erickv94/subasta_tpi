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
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description ?: 'Sin descripcion'}})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>