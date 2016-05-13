@extends('admin.template.layout')

@section('title') Prédicas | Panel de administración @endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-play fa-fw"></i> Prédicas 
                <a href="{{ route('sermons.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de prédicas</li>
            </ol>
        </div>
    </div>
    @include('flash::message')
	<!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Título</th>
                <th class="text-center">Mes</th>         
                <th class="text-center">Año</th> 
                <th class="text-center">Predicador</th> 
                <th class="text-center">User</th>  
                <th class="text-center">Acción</th>              
            </tr>
            @foreach($sermons as $item) 
            <tr>
                <td class="text-center">{{ $item->title }} </td>
                <td class="text-center">{{ $item->month->fecha }}</td>
                <td class="text-center">{{ $item->year->fecha }}</td>
                <td class="text-center">{{ $item->preacher->nombre }}</td>
                <td class="text-center">{{ $item->user->name }}</td>
                <td class="text-center">
                    <a href="{{ route('sermons.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>
                </td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
@endsection