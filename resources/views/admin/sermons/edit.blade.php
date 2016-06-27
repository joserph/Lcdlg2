@extends('admin.template.layout')

@section('title') Editar prédica | Panel de administración @endsection

@section('stylesheet')
    <!-- Plugin Chosen -->
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <!-- Plugin trumbowyg -->
    <!--<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">-->
      <!-- Plugin Froala Wysiwyg Editor -->
    <link rel="stylesheet" href="{{ asset('plugins/froala/css/froala_editor.min.css') }}">
@endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-edit fa-fw"></i> Editar prédica
                @if(Auth::user()->role == 'admin')
                    {!! Form::model($sermon, ['route' => ['sermons.destroy', $sermon->id], 'method' => 'DELETE', 'role' => 'form', 'class' => 'pull-right']) !!}        
                        {!! Form::button('<i class="fa fa-trash fa-fw"></i> ' . 'Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'return confirm("¿Seguro de eliminar prédica?")']) !!}
                    {!! Form::close() !!}
                @endif
            </h2>
            
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li><a href="{{ route('sermons.index') }}">Prédicas</a></li>
                <li class="active">Editar prédica</li>
            </ol>
        </div>
    </div>
    <ol class="breadcrumb">
        <!-- Form -->
    	{!! Form::open(['route' => ['sermons.update', $sermon], 'method' => 'PUT']) !!}
            {!! Form::hidden('id_user', \Auth::user()->id) !!}
            {!! Form::hidden('update_user', \Auth::user()->id) !!}
            {!! Form::label('title', 'Título') !!}
            <div class="row">
                <div class="col-md-10">
                    {!! Form::text('title', $sermon->title, ['class' => 'form-control', 'placeholder' => 'Título de la predica', 'autofocus']) !!}
                </div>
            </div>
            {!! Form::label('fecha', 'Fecha') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::date('fecha', $sermon->fecha, ['class' => 'form-control', 'placeholder' => 'dd/mm/aaaa']) !!}
                </div>
            </div>
            {!! Form::label('id_month', 'Mes') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('id_month', $months, $sermon->month->id, ['class' => 'form-control select-mes', 'placeholder' => 'Seleccione tag mes']) !!}
                </div>
            </div>
            {!! Form::label('id_year', 'Año') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('id_year', $years, $sermon->year->id, ['class' => 'form-control select-anio', 'placeholder' => 'Seleccione tag año']) !!}
                </div>
            </div>
            {!! Form::label('id_preacher', 'Predicador') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('id_preacher', $preachers, $sermon->preacher->id, ['class' => 'form-control select-pre', 'placeholder' => 'Seleccione predicador']) !!}
                </div>
            </div>
            {!! Form::label('content', 'Contenido') !!}
            <div class="row">
                <div class="col-md-10">
                    {!! Form::textarea('content', $sermon->content, ['class' => 'form-control content', 'placeholder' => 'Contenido de la predica']) !!}
                </div>
            </div>
            {!! Form::label('audio', 'Audio') !!}
            <div class="row">
                <div class="col-md-10">
                    {!! Form::textarea('audio', $sermon->audio, ['class' => 'form-control audio', 'placeholder' => 'Colocar audio']) !!}
                </div>
            </div>
            {!! Form::label('video', 'Video') !!}
            <div class="row">
                <div class="col-md-10">
                    {!! Form::textarea('video', $sermon->video, ['class' => 'form-control video', 'placeholder' => 'Colocar video']) !!}
                </div>
            </div>
            {!! Form::label('estatus', 'Estatus') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::select('estatus', [
                    'publicado' => 'Publicado',
                    'menu' => 'En menú',
                    'oculto' => 'Oculto'], $sermon->estatus, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}
                </div>
            </div>
            <!-- Habilitar comentarios -->
            <br>   
            {!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 
        {!! Form::close() !!}
    </ol>
    @section('scripts')
        <!-- Chosen JavaScript -->
        <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
        <!-- Trumbowyg JavaScript -->
        <!--<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>-->
        <!-- Plugin Froala Wysiwyg Editor -->
        <script src="{{ asset('plugins/froala/js/froala_editor.min.js') }}"></script>
        <script>
            $('.select-mes').chosen();
            $('.select-anio').chosen();
            $('.select-pre').chosen();
            $(function() {
                $('.content').editable({inlineMode: false});
                $('.audio').editable({inlineMode: false});
                $('.video').editable({inlineMode: false});
            });           
        </script>
    @endsection
@endsection