<div class="form-group">
	{{ Form::label('code', 'Codigo del Producto') }}
	{{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
</div>
<div class="form-group">
	{{ Form::label('name_product', 'Nombre del producto') }}
	{{ Form::text('name_product', null, ['class' => 'form-control', 'id' => 'name_product']) }}
</div>
<div class="form-group">
	{{ Form::label('description_product', 'Descripción') }}
	{{ Form::textarea('description_product', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>