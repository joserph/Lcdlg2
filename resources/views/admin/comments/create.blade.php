<div class="error"></div>
{!! Form::open(['route' => 'comments.store', 'class' => 'add-comment']) !!}
 	{!! Form::hidden('id_user', Auth::user()->id) !!}
 	<input type="hidden" value="{{ $sermon->id }}" name="id_article">
	{!! Form::label('nombre', 'Nombre') !!}
	<div class="row">
		<div class="col-md-6">
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Tu nombre', 'autofocus']) !!}
		</div>
	</div>
	{!! Form::label('color', 'Selecciona tu color favorito') !!}
    <div class="row">
        <div class="col-md-1">
            {!! Form::color('color', null, ['class' => 'form-control', 'placeholder' => 'Publica tu comentario']) !!}
        </div>
    </div>
    {!! Form::label('comentario', 'Comentario') !!}
    <div class="row">
        <div class="col-md-6">
            {!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Publica tu comentario']) !!}
        </div>
    </div>
	<br>	
    <button tipe="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar</button>
{!! Form::close() !!}
