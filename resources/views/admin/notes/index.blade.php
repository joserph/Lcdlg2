@extends('admin.template.layout')

@section('title') Notas | Panel de administración @endsection

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-bars fa-fw"></i> Notas</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de notas</li>
            </ol>
        </div>
    </div>
    <hr>
    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">contenido</th>        
                <th class="text-center">Prédica</th> 
                <th class="text-center">Usuario</th>
                <th class="text-center">Publicado</th>              
            </tr>
            @foreach($notes as $item) 
            <tr>
                <td class="text-center">{{ $item->contenido }} </td>
                <td class="text-center">{{ $item->sermon->title }}</td>
                <td class="text-center">{{ $item->user->name }} </td>
                <td class="text-center">{{ $item->created_at->format('d/m/Y') }}</td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
    <hr>
@endsection