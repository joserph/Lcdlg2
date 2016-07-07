<div class="errorNote"></div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
<input type="hidden" id="id">
 {!! Form::label('contenido', 'Contenido de la nota') !!}
<div class="row">
    <div class="col-md-12">
        {!! Form::textarea('contenido', null, ['class' => 'form-control', 'placeholder' => 'Publica tu nota', 'id' => 'contenidoEdit', 'rows' => '4', 'autofocus']) !!}
    </div>
</div>
{!! Form::label('color', 'Selecciona un color de fuente') !!}
<div class="row">
    <div class="col-md-2">
        {!! Form::color('color', null, ['class' => 'form-control', 'id' => 'colorEdit']) !!}
    </div>
</div>
<br>
<button tipe="submit" class="btn btn-warning" id="edit-nota"><i class="fa fa-refresh"></i> Actualizar</button>
