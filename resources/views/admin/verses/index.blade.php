@extends('admin.template.layout')

@section('title') Versos | Panel de administración @endsection

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-book fa-fw"></i> Versos 
                <a href="{{ route('verses.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de versos</li>
            </ol>
        </div>
    </div>
    @include('flash::message')
    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Libro</th>
                <th class="text-center">Capítulo</th>         
                <th class="text-center">Versículo</th>
                <th class="text-center">Texto</th>  
                <th class="text-center">Usuario</th>  
                <th class="text-center">Acción</th>              
            </tr>
            @foreach($verses as $item) 
            <tr>
                <td class="text-center">{{ $item->libro }} </td>
                <td class="text-center">{{ $item->capitulo }}</td>
                <td class="text-center">{{ $item->versiculo }}</td>
                <td class="text-center">{{ $item->texto }}</td>
                <td class="text-center">{{ $item->user->name }}</td>
                <td class="text-center">
                    <a href="{{ route('verses.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>
                </td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
@endsection