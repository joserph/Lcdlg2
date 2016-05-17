@extends('admin.template.layout')

@section('title') Editar menú | Panel de administración @endsection

@section('stylesheet')
    <!-- Plugin trumbowyg -->
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
@endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-plus-circle fa-fw"></i> Editar menú
                {!! Form::model($menu, ['route' => ['menu.destroy', $menu->id], 'method' => 'DELETE', 'role' => 'form', 'class' => 'pull-right']) !!}        
                    {!! Form::button('<i class="fa fa-trash fa-fw"></i> ' . 'Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Seguro de eliminar menú?")']) !!}
                {!! Form::close() !!}
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
            	<li><a href="{{ route('menu.index') }}">Menú</a></li>
                <li class="active">Editar menú</li>
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
        {!! Form::open(['route' => ['menu.update', $menu], 'method' => 'PUT']) !!}
            {!! Form::hidden('update_user', \Auth::user()->id) !!}
            {!! Form::label('nombre', 'Nombre') !!}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::text('nombre', $menu->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del menú', 'autofocus']) !!}
                </div>
            </div>
            {!! Form::label('estatus', 'Estatus') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('estatus', [
                    'principal' => 'Principal',
                    'publico' => 'Público',
                    'privado' => 'Privado',
                    'oculto' => 'Oculto'], $menu->estatus, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}
                </div>
            </div>
            {!! Form::label('peso', 'Peso') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('peso', [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12'], $menu->peso, ['class' => 'form-control', 'placeholder' => 'Seleccionar peso de menú']) !!}
                </div>
            </div>
            {!! Form::label('tipo', 'Tipo') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::radios('tipo', $tipos, $menu->tipo) !!}
                </div>
            </div>
            <!-- Seleccionar Padre -->
             {!! Form::label('categoria', 'Categoría') !!}
            <div class="row">
                <div class="col-md-3">
                     {!! Form::radios('categoria', $categorias, $menu->categoria) !!}
                </div>
            </div>
            <br>   
            {!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 
        {!! Form::close() !!}
    </ol>
@endsection