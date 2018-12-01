<div class="form-group">
	{{ Form::label('codigo', 'Codigo del Producto') }}
	{{ Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_producto', 'Nombre del producto') }}
	{{ Form::text('nombre_producto', null, ['class' => 'form-control', 'id' => 'nombre_producto']) }}
</div>
<div class="form-group">
	{{ Form::label('fecha_expiracion','Fecha de Expiracion') }}
	{{ Form::date('fecha_expiracion', null, ['class' => 'form-control', 'id' => 'fecha_expiracion']) }}
</div>
<div class="form-group">
	{{ Form::label('precio_inicial','Precio Inicial') }}
	{{ Form::text('precio_inicial', null, ['class' => 'form-control', 'id' => 'precio_inicial']) }}
</div>
<div class="form-group">
	{{ Form::label('id_categoria','Categoria') }}
	{{ Form::select('categorias', $categorias,$categorias, ['class' => 'form-control select2','placeholder' => 'Seleccionar categoria...']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control', 'id' => 'nombre_producto']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>