<div class="error"></div>
{!! Form::open(['route' => 'preachers.store', 'class' => 'add-predicador']) !!}
 	{!! Form::hidden('id_user', Auth::user()->id) !!}
    {!! Form::hidden('update_user', Auth::user()->id) !!}
	{!! Form::label('nombre', 'Nombre') !!}
	<div class="row">
    		<div class="col-md-6">
    			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del predicador', 'autofocus']) !!}
    		</div>
    	</div>
    	<br>
	
    	<button tipe="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar</button>
{!! Form::close() !!}
