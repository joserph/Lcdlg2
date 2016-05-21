@extends('admin.template.layout')

@section('title') Agregar verso | Panel de administración @endsection

@section('stylesheet')
    <!-- Plugin Chosen -->
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <!-- Plugin trumbowyg -->
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
@endsection
<script>
    
</script>
@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-plus-circle fa-fw"></i> Agregar verso</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
            	<li><a href="{{ route('verses.index') }}">Versos</a></li>
                <li class="active">Agregar verso</li>
            </ol>
        </div>
    </div>
    @if(count($errors) > 0)
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
        {!! Form::open(['route' => 'verses.store']) !!}
            {!! Form::hidden('id_user', \Auth::user()->id) !!}
            {!! Form::hidden('update_user', \Auth::user()->id) !!}
            {!! Form::label('libro', 'Libro') !!}
            <div class="row">
                <div class="col-md-4">
                    {!! Form::select('libro', [
                        'Génesis' => 'Génesis',
                        'Exodo' => 'Exodo',
                        'Levítico' => 'Levítico',
                        'Números' => 'Número',
                        'Deuteronomio'=> 'Deuteronomio',
                        'Josué' => 'Josué',
                        'Jueces' => 'Jueces',
                        'Rut' => 'Rut',
                        '1 Samuel' => '1 Samuel',
                        '2 Samuel' => '2 Samuel', 
                        '1 Reyes' => '1 Reyes',
                        '2 Reyes' => '2 Reyes', 
                        '1 Crónicas' => '1 Crónicas',
                        '2 Crónicas' => '2 Crónicas', 
                        'Esdras' => 'Esdras', 
                        'Nehemías' => 'Nehemías',
                        'Ester' => 'Ester', 
                        'Job' => 'Job', 
                        'Salmos' => 'Salmos',
                        'Proverbios' => 'Proverbios',
                        'Eclesiastés' => 'Eclesiastés',
                        'Cantares' => 'Cantares', 
                        'Isaías' => 'Isaías',
                        'Jeremías' => 'Jeremías', 
                        'Lamentaciones' => 'Lamentaciones', 
                        'Ezequiel' => 'Ezequiel', 
                        'Daniel' => 'Daniel', 
                        'Oseas' => 'Oseas', 
                        'Joel' => 'Joel', 
                        'Amos' => 'Amos', 
                        'Abdías' => 'Abdías', 
                        'Jonás' => 'Jonás',
                        'Miqueas' => 'Miqueas',
                        'Nahúm' => 'Nahúm', 
                        'Habacuc' => 'Habacuc', 
                        'Sofonías' => 'Sofonías', 
                        'Hageo' => 'Hageo', 
                        'Zacarías' => 'Zacarías',
                        'Malaquías' => 'Malaquías',
                        'Mateo' => 'Mateo',
                        'Marcos' => 'Marcos',
                        'Lucas' => 'Lucas', 
                        'Juan' => 'Juan', 
                        'Hechos' => 'Hechos',
                        'Romanos' => 'Romanos', 
                        '1 Corintios' => '1 Corintios',
                        '2 Corintios' => '2 Corintios',
                        'Gálatas' => 'Gálatas',
                        'Efesios' => 'Efesios', 
                        'Filipenses' => 'Filipenses',
                        'Colosenses' => 'Colosenses',
                        '1 Tesalonicenses' => '1 Tesalonicenses',
                        '2 Tesalonicenses' => '2 Tesalonicenses', 
                        '1 Timoteo' => '1 Timoteo',
                        '2 Timoteo' => '2 Timoteo', 
                        'Tito' => 'Tito',
                        'Filemón' => 'Filemón',
                        'Hebreos' => 'Hebreos',
                        'Santiago' => 'Santiago',
                        '1 Pedro' => '1 Pedro',
                        '2 Pedro' => '2 Pedro', 
                        '1 Juan' => '1 Juan',
                        '2 Juan' => '2 Juan',
                        '3 Juan' => '3 Juan', 
                        'Judas' => 'Judas',
                        'Apocalipsis' => 'Apocalipsis'], null, ['class' => 'form-control libro', 'placeholder' => 'Seleccione libro', 'autofocus']) !!}
                </div>
            </div>
            {!! Form::label('capitulo', 'Capítulo') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::text('capitulo', null, ['class' => 'form-control', 'placeholder' => 'Número de capítulo']) !!}
                </div>
            </div>
            {!! Form::label('versiculo', 'Versículo') !!}
            <div class="row">
                <div class="col-md-3">
                    {!! Form::text('versiculo', null, ['class' => 'form-control', 'placeholder' => 'Número de versículo']) !!}
                </div>
            </div>
            {!! Form::label('texto', 'Texto') !!}
            <div class="row">
                <div class="col-md-8">
                    {!! Form::textarea('texto', null, ['class' => 'form-control texto', 'placeholder' => 'Texto del versículo']) !!}
                </div>
            </div>
            <br>   
            {!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 
        {!! Form::close() !!}
    </ol>
    @section('scripts')
        <!-- Chosen JavaScript -->
        <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
        <!-- Trumbowyg JavaScript -->
        <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
        <script>
            $('.texto').trumbowyg();
            $('.libro').chosen();
        </script>
    @endsection
@endsection