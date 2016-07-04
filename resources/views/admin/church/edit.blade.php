@extends('admin.template.layout')

@section('title') Editar iglesia| Panel de administración @endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-pencil-square fa-fw"></i> Editar iglesia {{ $church->nombre }}</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
            	<li><a href="{{ route('church.index') }}">Iglesia {{ $church->nombre }}</a></li>
                <li class="active">Editar iglesia {{ $church->nombre }}</li>
            </ol>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><i class="fa fa-exclamation-triangle fa-fw"></i></strong> Por favor corrige los siguentes errores:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <ol class="breadcrumb">
        <!-- Form -->
        {!! Form::open(['route' => ['church.update', $church], 'method' => 'PUT']) !!}
            {!! Form::hidden('id_user', \Auth::user()->id) !!}
            {!! Form::hidden('update_user', \Auth::user()->id) !!}
            {!! Form::label('nombre', 'Nombre') !!}
            <div class="row">
                <div class="col-md-10">
                    {!! Form::text('nombre', $church->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre de la iglesia', 'autofocus']) !!}
                </div>
            </div>
            {!! Form::label('lema', 'Lema') !!}
            <div class="row">
                <div class="col-md-8">
                    {!! Form::text('lema', $church->lema, ['class' => 'form-control', 'placeholder' => 'Lema de la iglesia']) !!}
                </div>
            </div>
            <br>   
            {!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 
        {!! Form::close() !!}
    </ol>
@endsection