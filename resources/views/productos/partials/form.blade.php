<div class="form-group">
	{{ Form::label('nombre_producto', 'Nombre del producto') }}
	{{ Form::text('nombre_producto', null, ['class' => 'form-control', 'id' => 'nombre_producto']) }}
	@if($errors->has('nombre_producto'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('nombre_producto')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('fecha_expiracion','Fecha de Expiracion') }}
	{{ Form::date('fecha_expiracion', null, ['class' => 'form-control', 'id' => 'fecha_expiracion']) }}
	@if($errors->has('fecha_expiracion'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('fecha_expiracion')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('precio_inicial','Precio Inicial') }}
	{{ Form::text('precio_inicial', null, ['class' => 'form-control', 'id' => 'precio_inicial']) }}
	@if($errors->has('precio_inicial'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('precio_inicial')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::label('id_categoria','Categoria') }}
	<select  class ="form-control"name="categorias" id="categorias" >
		<option value="" disabled selected>Seleccione una categoria</option>
     	@foreach($categorias as $categoria)
     	<option value="{{$categoria->id_categoria}} ">{{$categoria->nombre_categoria}}</option>
    	@endforeach
	</select>

</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control', 'id' => 'nombre_producto', 'S']) }}
	@if($errors->has('descripcion'))
		<div class="form-control-feedback text-danger">
				{{$errors->first('descripcion')}}
		</div>		
	@endif
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>