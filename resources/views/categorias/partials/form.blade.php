
<div class="form-group">
	{{ Form::label('nombre_categoria', 'Nombre del categoria') }}
	{{ Form::text('nombre_categoria', null, ['class' => 'form-control', 'id' => 'nombre_categoria']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control', 'id' => 'nombre_producto']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>