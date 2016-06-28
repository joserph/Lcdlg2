<div class="error"></div>
{!! Form::open(['route' => 'notes.store', 'class' => 'add-note']) !!}
 	{!! Form::hidden('id_user', Auth::user()->id) !!}
 	<input type="hidden" value="{{ $sermon->id }}" name="id_sermon">
    <div class="row">
        <div class="col-md-6">
            {!! Form::textarea('contenido', null, ['class' => 'form-control', 'placeholder' => 'Publica tu nota']) !!}
        </div>
    </div>
	{!! Form::label('color', 'Selecciona un color de fuente') !!}
    <div class="row">
        <div class="col-md-1">
            {!! Form::color('color', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    
	<br>	
    <button tipe="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Crear</button>
{!! Form::close() !!}
