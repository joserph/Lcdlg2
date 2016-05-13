@extends('admin.template.layout')

@section('title') Usuarios | Panel de Administración @stop

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-users fa-fw"></i> Usuarios</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Usuarios registrados</li>
            </ol>
        </div>
    </div>
    @include('flash::message')    

	<!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>
                <th>#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Email</th>  
                <th class="text-center">Role</th>
                @if(Auth::user()->role == 'admin')    
                    <th class="text-center">Acción</th>
                @endif
            </tr>            
            @foreach ($users as $item)
            <tr>
                <td>{{ $contador += 1 }}</td>
                <td class="text-center">{{ $item->name }}</td>
                <td class="text-center">{{ $item->email }}</td>
                <td class="text-center">
                    @if($item->role == 'user')
                        <span class="label label-primary">{{ $item->role }}</span>
                    @elseif($item->role == 'editor')
                        <span class="label label-warning">{{ $item->role }}</span>
                    @else
                        <span class="label label-success">{{ $item->role }}</span>
                    @endif
                </td>
                @if(Auth::user()->role == 'admin') 
                    <td class="text-center">                                                                                  
                        <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>                                    
                    </td>
                @endif    
            </tr>
            @endforeach
        </table>
    </div>
    <!-- /.table -->

@endsection