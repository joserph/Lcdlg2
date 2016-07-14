<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
<input type="hidden" id="id">
{!! Form::label('fecha', 'Fecha') !!}
	<div class="row">
		<div class="col-md-12 has-error">
			{!! Form::text('fecha', null, ['class' => 'form-control', 'id' => 'fechaDelete', 'placeholder' => 'Fecha en letras', 'disabled']) !!}
		</div>
	</div>
<br>	
<button tipe="submit" class="btn btn-danger" id="delete-fecha"><i class="fa fa-times-circle fa-fw"></i> Eliminar</button>
