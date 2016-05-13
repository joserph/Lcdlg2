@extends('admin.template.layout')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-cog fa-fw"></i> Bienvenidos al Panel de Administación</h2>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-cogs fa-fw"></i> Módulos
                </li>
            </ol>
        </div>
    </div>
	<!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            @if($countUsers > 1)
                                <i class="fa fa-users fa-5x"></i>
                            @else
                                <i class="fa fa-user fa-5x"></i>
                            @endif                            
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $countUsers }}</div>
                            @if($countUsers > 1)
                                <div>Usuarios Registrados!</div>
                            @else
                                <div>Usuario Registrado!</div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('users.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-calendar fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $countDates }}</div>
                            @if($countDates > 1)
                                <div>Fechas Agregadas!</div>
                            @else
                                <div>Fecha Agregada!</div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('dates.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-bullhorn fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $countPreachers }}</div>
                            @if($countPreachers > 1)
                                <div>Predicadores Agregados!</div>
                            @else
                                <div>Predicador Agregado!</div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('preachers.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-play fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $countSermons }}</div>
                            @if($countSermons > 1)
                                <div>Predicas Agregadas!</div>
                            @else
                                <div>Predica Agregada!</div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('sermons.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection