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

@endsection