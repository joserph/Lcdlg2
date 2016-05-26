@extends('admin.template.layout')

@section('title') Peticiones de oración | Panel de administración @endsection

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-commenting fa-fw"></i> Peticiones de oración 
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de Peticiones de oración</li>
            </ol>
        </div>
    </div>
    @include('flash::message')
    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Nombre</th>
                <th class="text-center">Email</th>         
                <th class="text-center">Petición</th> 
                <th class="text-center">Acción</th>              
            </tr>
            @foreach($prayers as $item) 
            <tr>
                <td class="text-center">{{ $item->nombre }} </td>
                <td class="text-center">{{ $item->email }}</td>
                <td class="text-center">{{ $item->peticion }}</td>
                <td class="text-center">
                    
                </td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
@endsection