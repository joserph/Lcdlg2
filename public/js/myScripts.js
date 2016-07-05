$(document).ready(function()
{
	/*
	 * ******************** ADD. ********************
	 */
	// Fechas
	var formFecha = $('.add-fecha');
	formFecha.on('submit', function()
	{
		$.ajax({
			type: formFecha.attr('method'),
			url: formFecha.attr('action'),
			data: formFecha.serialize(),
			success: function(data)
			{
				$('.error').html('');
				$('.success').hide().html('');
				if(data.success == false)
				{
					var errors = '';
						errors += '<div class="alert alert-warning">';
						errors += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-success">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
						successMessage += '</div>';
					$(formFecha)[0].reset();
					ListFechas();										
					$('#myModal').modal('hide');
					$('.success').show().html(successMessage);
				}
			},
			error: function(errors)
			{
				$('.error').html(errors);
			}
		});
		return false;
	});
	
	ListFechas();
	$('.deleteFecha').hide();
	// End fechas
	// Predicadores
	var formPredicador = $('.add-predicador');
	formPredicador.on('submit', function()
	{
		$.ajax({
			type: formPredicador.attr('method'),
			url: formPredicador.attr('action'),
			data: formPredicador.serialize(),
			success: function(data)
			{
				$('.error').html('');
				$('.success').hide().html('');
				if(data.success == false)
				{
					var errors = '';
						errors += '<div class="alert alert-warning">';
						errors += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-success">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
						successMessage += '</div>';
					$(formPredicador)[0].reset();
					ListPredicador();									
					$('#myModal').modal('hide');
					$('.success').show().html(successMessage);
				}
			},
			error: function()
			{
				$('.error').html(errors);
			}
		});
		return false;
	});
	ListPredicador();
	$('.deletePredicador').hide();
	// End predicadores
	// Comment
	var formComment = $('.add-comment');
	formComment.on('submit', function()
	{
		$.ajax({
			type: formComment.attr('method'),
			url: formComment.attr('action'),
			data: formComment.serialize(),
			success: function(data)
			{
				$('.error').html('');
				$('.success').hide().html('');
				if(data.success == false)
				{
					var errors = '';
						errors += '<div class="alert alert-warning">';
						errors += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-success">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
						successMessage += '</div>';
					$(formComment)[0].reset();
					ListComments();
					$('.success').show().html(successMessage);
				}
			},
			error: function()
			{
				$('.error').html(errors);
			}
		});
		return false;
	});
	ListComments();
	// End comment
	// Prayer
	var formPrayer = $('.add-prayer');
	formPrayer.on('submit', function()
	{
		$.ajax({
			type: formPrayer.attr('method'),
			url: formPrayer.attr('action'),
			data: formPrayer.serialize(),
			success: function(data)
			{
				$('.error').html('');
				$('.success').hide().html('');
				if(data.success == false)
				{
					var errors = '';
						errors += '<div class="alert alert-warning">';
						errors += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-success">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
						successMessage += '</div>';
					$(formPrayer)[0].reset();
					
					$('.success').show().html(successMessage);
				}
			},
			error: function()
			{
				$('.error').html(errors);
			}
		});
		return false;
	});
	// End prayer
	// Notes
	var formNote = $('.add-note');
	formNote.on('submit', function()
	{
		$.ajax({
			type: formNote.attr('method'),
			url: formNote.attr('action'),
			data: formNote.serialize(),
			success: function(data)
			{
				$('.error').html('');
				$('.success').hide().html('');
				if(data.success == false)
				{
					var errors = '';
						errors += '<div class="alert alert-warning">';
						errors += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-success">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
						successMessage += '</div>';
					$(formNote)[0].reset();
					ListNotes();
					//location.reload();
					$('.success').show().html(successMessage);
				}
			},
			error: function()
			{
				$('.error').html(errors);
			}
		});
		return false;
	});
	ListNotes();
	// End Notes
});


/*
 * ******************** LIST ********************
 */
 // Fechas
function ListFechas()
{	
	var trDatos = $('#tr-fecha');
	var route = 'http://lcdlg2.dev/date';
	$('#tr-fecha').empty();
	$.get(route, function(respuesta)
	{
		$(respuesta).each(function(key, value)
		{
			trDatos.append('<tr><td class="text-center">'+ value.fecha +'</td><td class="text-center">'+ value.tipo +'</td><td class="text-center"><button value='+ value.id +' onclick="ShowFecha(this);" data-toggle="modal" data-target="#myModal2" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square fa-fw"></i> Editar</button> <button value='+ value.id +' onclick="DeleteFecha(this);" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i> Eliminar</button></td></tr>')
		});
	});	
}
function ShowFecha(boton)
{
	var route = 'http://lcdlg2.dev/dates/'+ boton.value +'/edit';
	$.get(route, function(respuesta)
	{
		$('#fechaEdit').val(respuesta.fecha);
		$('#tipoEdit').val(respuesta.tipo);
		$('#id').val(respuesta.id);
	});
}
// End fechas
// Predicadores
function ListPredicador()
{
	var trDatos = $('#tr-predicador');
	var route = 'http://lcdlg2.dev/preacher';
	$('#tr-predicador').empty();
	$.get(route, function(respuesta)
	{
		$(respuesta).each(function(key, value)
		{
			trDatos.append('<tr><td class="text-center">'+ value.nombre +'</td><td class="text-center"><button value='+ value.id +' onclick="ShowPredicador(this);" data-toggle="modal" data-target="#myModal3" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square fa-fw"></i> Editar</button> <button value='+ value.id +' onclick="DeletePredicador(this);" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i> Eliminar</button></td></tr>')
		});
	});
}

function ShowPredicador(boton)
{
	var route = 'http://lcdlg2.dev/preachers/'+ boton.value +'/edit';
	$.get(route, function(respuesta)
	{
		$('#nombreEdit').val(respuesta.nombre);
		$('#id').val(respuesta.id);
	});
}
// End Predicadores

// Comment
function ListComments()
{
	var trDatos = $('#comments');
	var route = 'http://lcdlg2.dev/comment';
	var idSermon = $('#id_sermon').val();
	$('#comments').empty();
	$.get(route, function(respuesta)
	{
		$(respuesta).each(function(key, value)
		{
			if(idSermon == value.id_article)
			{
				trDatos.append('<p class="text-capitalize" style="color:'+ value.color +'"><strong><em>'+ value.nombre +'</em></strong> - '+ value.date +'</p><p class="text-capitalize text-justify">'+ value.comentario +'</p><hr>');
			}			
		});
	});
}
// End Comment
// Notes
function ListNotes()
{
	var trDatos = $('#notes');
	var route = 'http://lcdlg2.dev/note';
	var idSermon = $('#id_sermon').val();
	$('#notes').empty();
	$.get(route, function(respuesta)
	{
		$(respuesta).each(function(key, value)
		{
			if(idSermon == value.id_sermon)
			{
				var fecha = value.created_at;
				var fechaFinal = moment(fecha).locale('es').fromNow();
				//trDatos.append('<div class="panel panel-default" style="color:'+ value.color +'"><div class="panel-body">'+ value.contenido +'</div><div class="panel-footer">' + value.created_at + '</div></div><hr>')
				//trDatos.append('<span class="label label-default" style="color:'+ value.color +'">'+ value.contenido +' - ' + value.created_at + '</span><hr>')
				trDatos.append('<li class="list-group-item" style="color:'+ value.color +'"><span class="badge">'+ fechaFinal +'</span>'+ value.contenido +'<span class="pull-right"><button type="button" value='+ value.id +' onclick="ShowNota(this);" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square fa-fw"></i></button> <button type="button" value='+ value.id +' onclick="DeleteNote(this);" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></button></span></li>')
			}
		});
	});
}

function ShowNota(boton)
{
	var route = 'http://lcdlg2.dev/notes/'+ boton.value +'/edit';
	$.get(route, function(respuesta)
	{
		$('#contenidoEdit').val(respuesta.contenido);
		$('#colorEdit').val(respuesta.color);
		$('#id').val(respuesta.id);
	})
}
// End Notes

/*
 * ******************** EDIT. ********************
 */
// Fechas
$('#edit-fecha').click(function()
{
	var value = $('#id').val();
	var fecha = $('#fechaEdit').val();
	var tipo = $('#tipoEdit').val();
	var updateUser = $('#updateUser').val();
	var route = 'http://lcdlg2.dev/dates/'+value+'';
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {fecha: fecha, tipo: tipo, update_user: updateUser},
		success: function(data)
		{
			if(data.success == false)
			{

			}else{
				var successMessage = '';
				successMessage += '<div class="alert alert-warning">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				ListFechas();
				$('#myModal2').modal('hide');
				$('.success').show().html(successMessage);
			}
			
		}
	});
});
// End fechas
// Predicadores
$('#edit-predicador').click(function()
{
	var id = $('#id').val();
	var nombre = $('#nombreEdit').val();
	var updateUser = $('#updateUser').val();
	var route = 'http://lcdlg2.dev/preachers/'+id+'';
	var token = $('#token').val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {nombre: nombre, update_user: updateUser},
		success: function(data)
		{
			if(data.success == false)
			{
			
			}else{
				var successMessage = '';
				successMessage += '<div class="alert alert-warning">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				ListPredicador();
				$('#myModal3').modal('hide');
				$('.success').show().html(successMessage);
			}
		}
	});
});
// End predicadores
// Notes
$('#edit-nota').click(function()
{
	var id = $('#id').val();
	var contenido = $('#contenidoEdit').val();
	var color = $('#colorEdit').val();
	var route = 'http://lcdlg2.dev/notes/'+id+'';
	var token = $('#token').val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {contenido: contenido, color: color},
		success: function(data)
		{
			if(data.success == false)
			{
				console.log("Error");
			}else{
				var successMessage = '';
				successMessage += '<div class="alert alert-warning">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				ListNotes();
				$('#myModal').modal('hide');
				$('.success').show().html(successMessage);
			}
		}
	})
});
// End notes


/*
 * ******************** DELETE. ********************
 */
 // Fechas
function DeleteFecha(boton)
{
	var route = 'http://lcdlg2.dev/dates/'+boton.value+'';
	var token = $("#token").val();
	var action = confirm("¿Seguro de eliminar fecha?");
	if(action)
	{
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			success: function(data)
			{
				var successMessage = '';
				successMessage += '<div class="alert alert-danger">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				ListFechas();
				$('.success').show().html(successMessage);	
			}
		});
	}	
}
// End Fechas
// Predicadores
function DeletePredicador(boton)
{
	var route = 'http://lcdlg2.dev/preachers/'+boton.value+'';
	var token = $('#token').val();
	var action = confirm("¿Seguro de eliminar fecha?");
	if(action)
	{
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			success: function(data)
			{
				var successMessage = '';
				successMessage += '<div class="alert alert-danger">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				ListPredicador();
				$('.success').show().html(successMessage);
			}
		});
	}
}
// End predicadores
// Notes
function DeleteNote(boton)
{
	var route = 'http://lcdlg2.dev/notes/'+boton.value+'';
	var token = $('#token').val();
	var action = confirm('¿Seguro de eliminar nota?');
	if(action)
	{
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			success: function(data)
			{
				var successMessage = '';
				successMessage += '<div class="alert alert-danger">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				ListNotes();
				$('.success').show().html(successMessage);
			}
		});
	}
}


// End Notes