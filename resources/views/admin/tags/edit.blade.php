<div class="error"></div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
<input type="hidden" id="id">
{!! Form::hidden('update_user', Auth::user()->id, ['id' => 'updateUser']) !!}
{!! Form::label('nombre', 'Nombre') !!}
<div class="row">
	<div class="col-md-6">
		{!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombreEdit', 'placeholder' => 'Nombre del tag']) !!}
	</div>
</div>
<br>	
<button tipe="submit" class="btn btn-warning" id="edit-tag"><i class="fa fa-refresh fa-fw"></i> Actualizar</button>
