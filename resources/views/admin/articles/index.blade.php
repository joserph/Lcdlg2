@extends('admin.template.layout')

@section('title') Artículos | Panel de administración @endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-file-text fa-fw"></i> Artículos 
                <a href="{{ route('articles.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de artículos</li>
            </ol>
        </div>
    </div>
    @include('flash::message')
	<!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Título</th>
                <th class="text-center">Fecha</th>         
                <!--<th class="text-center">Contenido</th>--> 
                <th class="text-center">Usuario</th>  
                <th class="text-center">Acción</th>              
            </tr>
            @foreach($articles as $item) 
            <tr>
                <td class="text-center">{{ $item->title }} </td>
                <td class="text-center">{{ $item->fecha }}</td>
                <!--<td class="text-center">{{ $item->content }}</td>-->
                <td class="text-center">{{ $item->user->name }}</td>
                <td class="text-center">
                    <a href="{{ route('articles.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>
                </td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
@endsection