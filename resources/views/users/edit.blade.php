@extends('admin.template.layout')

@section('title') Editar usuario | Panel de Administración @stop

@section('content')
 	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-edit fa-fw"></i> Editar usuario</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                <li class="active">Editar usuario</li>
            </ol>
        </div>
    </div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Usuario</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					@include('flash::message')
					{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
						<div class="form-group">							
							{!! Form::label('name', 'Nombre') !!}
							{!! Form::text('name', $user->name, ['class' => 'form-control', 'readonly']) !!}							
						</div>
						<div class="form-group">							
							{!! Form::label('email', 'Email') !!}
							{!! Form::text('email', $user->email, ['class' => 'form-control', 'readonly']) !!}							
						</div>
						<div class="form-group">							
							{!! Form::label('role', 'Rol') !!}
							{!! Form::select('role', [
								'' => 'Seleccionar',
								'user' => 'User',
								'editor' => 'Editor',
								'admin' => 'Admin'], $user->role,['class' => 'form-control', 'autofocus']) !!}							
						</div>
						
						<button tipe="submit" class="btn btn-warning"><i class="fa fa-refresh"></i> Actualizar</button>
					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection