<div class="error"></div>
{!! Form::open(['route' => 'tags.store', 'class' => 'add-tag']) !!}
	{!! Form::label('nombre', 'Nombre') !!}
	<div class="row">
		<div class="col-md-6">
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag']) !!}
		</div>
	</div>
	<br>	
    <button tipe="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar</button>
{!! Form::close() !!}
