@extends('admin.template.layout')

@section('title') Menú | Panel de administración @endsection

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-bars fa-fw"></i> Menú 
                <a href="{{ route('menu.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
            </h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-bars fa-fw"></i> <a href="{{ route('admin.index') }}">Panel de administración</a></li>
                <li class="active">Lista de menú</li>
            </ol>
        </div>
    </div>
    @include('flash::message')
    <!-- Preview menú -->
    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
                    @foreach($previewMenu as $menu)
                        @if($menu->estatus == 'principal')
                            @if($menu->tipo == 'expandido')
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $menu->nombre }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($hijos as $hijo)
                                            @if($menu->id == $hijo->id_padre)
                                                <li><a href="#">{{ $hijo->nombre }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @else                                
                                <li><a href="#">{{ $menu->nombre }}</a></li>                                
                            @endif
                        @elseif($menu->estatus == 'privado')
                            @if(Auth::user())
                                @if($menu->tipo == 'expandido')
                                    <li class="active" class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $menu->nombre }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            @foreach($hijos as $hijo)
                                                @if($menu->id == $hijo->id_padre)
                                                    <li><a href="#">{{ $hijo->nombre }}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    @if($menu->id_padre < 1)
                                        <li class="active"><a href="#">{{ $menu->nombre }}</a></li>
                                    @endif
                                @endif
                            @endif
                        @endif                        
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- /.Preview menú -->
    <hr>
    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Nombre</th>
                <th class="text-center">Estatus</th>         
                <th class="text-center">Peso</th> 
                <th class="text-center">Tipo</th>
                <th class="text-center">Menú Padre</th>         
                <th class="text-center">Categoría</th>
                <th class="text-center">Usuario</th> 
                <th class="text-center">Acción</th>              
            </tr>
            @foreach($menus as $item) 
            <tr>
                <td class="text-center">{{ $item->nombre }} </td>
                <td class="text-center">{{ $item->estatus }}</td>
                <td class="text-center">{{ $item->peso}}</td>
                <td class="text-center">{{ $item->tipo }} </td>
                <td class="text-center">{{ $item->id_padre }}</td>
                <td class="text-center">{{ $item->categoria }}</td>
                <td class="text-center">{{ $item->user->name }} </td>
                <td class="text-center">
                    <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>
                </td>
            </tr>          
            @endforeach            
        </table>
    </div>
    <!-- /.table -->
    <hr>
    
@endsection