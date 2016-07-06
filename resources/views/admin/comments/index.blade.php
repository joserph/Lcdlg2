@extends('admin.template.layout')

@section('title') Comentarios | Panel de administración @endsection

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-comments fa-fw"></i> Comentarios 
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de comentarios</li>
            </ol>
        </div>
    </div>
    @include('flash::message')
    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Nombre del usuario</th>
                <th class="text-center">Comentario</th>         
                <th class="text-center">Articulo</th>  
                <th class="text-center">Acción</th>              
            </tr>
            @foreach($comments as $item) 
            <tr>
                <td class="text-center">{{ $item->nombre }} </td>
                <td class="text-center">{{ $item->comentario }}</td>
                <td class="text-center">{{ $item->sermon->title }}</td>
                <td class="text-center">
                    
                </td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
@endsection