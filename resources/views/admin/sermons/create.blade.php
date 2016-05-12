@extends('admin.template.layout')

@section('title') Prédicas | Panel de administración @endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-plus-circle fa-fw"></i> Agregar prédicas 
            </h2>
            <ol class="breadcrumb">
            	<li><i class="fa fa-play fa-fw"></i> <a href="{{ route('sermons.index') }}">Lista de prédicas</a></li>
                <li class="active">Agregar prédicas</li>
            </ol>
        </div>
    </div>

    <!-- Form -->
	{!! Form::open(['route' => 'sermons.store']) !!}
        {!! Form::hidden('id_user', \Auth::user()->id) !!}
        {!! Form::hidden('update_user', \Auth::user()->id) !!}
        {!! Form::label('title', 'Título') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título de la predica', 'autofocus']) !!}
            </div>
        </div>
        {!! Form::label('fecha', 'Fecha') !!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'dd/mm/aaaa']) !!}
            </div>
        </div>
        {!! Form::label('id_month', 'Mes') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::select('id_month', $months, null, ['class' => 'form-control select-mes', 'placeholder' => 'Seleccione tag mes']) !!}
            </div>
        </div>
        {!! Form::label('id_year', 'Año') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::select('id_year', $years, null, ['class' => 'form-control select-anio', 'placeholder' => 'Seleccione tag año']) !!}
            </div>
        </div>
        {!! Form::label('id_preacher', 'Predicador') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::select('id_preacher', $preachers, null, ['class' => 'form-control select-pre', 'placeholder' => 'Seleccione predicador']) !!}
            </div>
        </div>
        {!! Form::label('content', 'Contenido') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('content', null, ['class' => 'form-control content', 'placeholder' => 'Contenido de la predica']) !!}
            </div>
        </div>
        {!! Form::label('audio', 'Audio') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('audio', null, ['class' => 'form-control audio', 'placeholder' => 'Colocar audio']) !!}
            </div>
        </div>
        {!! Form::label('video', 'Video') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('video', null, ['class' => 'form-control video', 'placeholder' => 'Colocar video']) !!}
            </div>
        </div>
        {!! Form::label('estatus', 'Estatus') !!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::select('estatus', [
                'publicado' => 'Publicado',
                'menu' => 'En menú',
                'oculto' => 'Oculto'], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}
            </div>
        </div>
        <!-- Habilitar comentarios -->
        <br>   
        {!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 
    {!! Form::close() !!}

@endsection