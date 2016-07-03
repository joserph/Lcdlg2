<div class="error"></div>
{!! Form::open(['route' => 'notes.store', 'class' => 'add-note']) !!}
 	{!! Form::hidden('id_user', Auth::user()->id) !!}
 	<input type="hidden" value="{{ $sermon->id }}" name="id_sermon">
    {!! Form::label('contenido', 'Contenido de la nota') !!}
    <div class="row">
        <div class="col-md-12">
            {!! Form::textarea('contenido', null, ['class' => 'form-control', 'placeholder' => 'Publica tu nota', 'rows' => '3', 'autofocus']) !!}
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

<!-- Modal Edit Note -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square fa-fw"></i> Editar nota</h4>
            </div>
            <div class="modal-body">
                @include('admin.notes.edit')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>