@extends('admin.template.layout')

@section('title') Iglesia {{ $church->nombre }} | Panel de administración @endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-institution fa-fw"></i> Iglesia {{ $church->nombre }}</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Iglesia {{ $church->nombre }}</li>
            </ol>
        </div>
    </div>
    @include('flash::message')

    <div class="text-center">
        <i class="fa fa-institution fa-fw fa-5x"></i>
        <h1>Iglesia {{ $church->nombre }}</h1>
        <div class="lead text-"><i class="fa fa-quote-left fa-fw"></i> <em>{{ $church->lema }}</em> <i class="fa fa-quote-right fa-fw"></i></div>
        <a href="{{ route('church.edit', $church->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square fa-fw"></i> Editar</a>
    </div>
@endsection