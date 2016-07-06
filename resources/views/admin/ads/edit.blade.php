@extends('admin.template.layout')

@section('title') Editar anuncio | Panel de administración @endsection

@section('stylesheet')
    <!-- Plugin Froala Wysiwyg Editor -->
    <link rel="stylesheet" href="{{ asset('plugins/froala/css/froala_editor.min.css') }}">
@endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-pencil-square fa-fw"></i> Editar anuncio
                {!! Form::model($ad, ['route' => ['ads.destroy', $ad->id], 'method' => 'DELETE', 'role' => 'form', 'class' => 'pull-right']) !!}        
                    {!! Form::button('<i class="fa fa-trash fa-fw"></i> ' . 'Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Seguro de eliminar anuncio?")']) !!}
                {!! Form::close() !!}                
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
            	<li><a href="{{ route('ads.index') }}">Anuncios</a></li>
                <li class="active">Editar anuncio</li>
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
        {!! Form::open(['route' => ['ads.update', $ad], 'method' => 'PUT']) !!}
            {!! Form::hidden('update_user', \Auth::user()->id) !!}
            {!! Form::label('nombre', 'Nombre') !!}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::text('nombre', $ad->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del menú', 'autofocus']) !!}
                </div>
            </div>
            {!! Form::label('estatus', 'Estatus') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('estatus', [
                    'publico' => 'Público',
                    'oculto' => 'Oculto'], $ad->estatus, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}
                </div>
            </div>
            {!! Form::label('contenido', 'Contenido') !!}
            <div class="row">
                <div class="col-md-8">
                    {!! Form::textarea('contenido', $ad->contenido, ['class' => 'form-control content', 'placeholder' => 'Contenido del anuncio']) !!}
                </div>
            </div>
            {!! Form::label('fecha', 'Fecha') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::date('fecha', $ad->fecha, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyyy']) !!}
                </div>
            </div>
            {!! Form::label('hora', 'Hora') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::time('hora', $ad->hora, ['class' => 'form-control', 'placeholder' => '08:00 a.m.']) !!}
                </div>
            </div>
            <br>   
            {!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 
        {!! Form::close() !!}
    </ol>
    @section('scripts')
        <!-- Plugin Froala Wysiwyg Editor -->
        <script src="{{ asset('plugins/froala/js/froala_editor.min.js') }}"></script>
        <script>
            $(function() {
                $('.content').editable({inlineMode: false});
            });           
        </script>
    @endsection
@endsection