<div class="error"></div>
<div class="success"></div>
{!! Form::open(['route' => 'prayers.store', 'class' => 'add-prayer']) !!}
	{!! Form::label('nombre', 'Nombre') !!}
	<div class="row">
		<div class="col-md-6">
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Tu nombre']) !!}
		</div>
	</div>
	<br>	
    <button tipe="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Enviar</button>
{!! Form::close() !!}
