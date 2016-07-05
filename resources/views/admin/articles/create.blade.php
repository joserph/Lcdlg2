@extends('admin.template.layout')

@section('title') Agregar artículo | Panel de administración @endsection

@section('stylesheet')
    <!-- Plugin trumbowyg -->
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
@endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-plus-circle fa-fw"></i> Agregar artículo</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
            	<li><a href="{{ route('articles.index') }}">Artículos</a></li>
                <li class="active">Agregar artículo</li>
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
        {!! Form::open(['route' => 'articles.store']) !!}
            {!! Form::hidden('id_user', \Auth::user()->id) !!}
            {!! Form::hidden('update_user', \Auth::user()->id) !!}
            {!! Form::hidden('tipo', 'articulo') !!}
            {!! Form::hidden('id_preacher', 1) !!}
            {!! Form::hidden('id_month', 1) !!}
            {!! Form::hidden('id_year', 1) !!}
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
            {!! Form::label('content', 'Contenido') !!}
            <div class="row">
                <div class="col-md-10">
                    {!! Form::textarea('content', null, ['class' => 'form-control content', 'placeholder' => 'Contenido de la predica']) !!}
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
    </ol>
    @section('scripts')
        <!-- Trumbowyg JavaScript -->
        <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
        <script>
            $('.content').trumbowyg();
        </script>
    @endsection
@endsection