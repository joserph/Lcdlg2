<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.index') }}">Panel de Administración</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="/"><i class="fa fa-fw fa-eye"></i> Página principal</a>
            </li>
            <li>
                <a href="{{ route('users.index') }}"><i class="fa fa-fw fa-users"></i> Admin users</a>
            </li>
            <li>
                <a href="{{ route('dates.index')}} "><i class="fa fa-fw fa-calendar"></i> Fechas</a>
            </li>
            <li>
                <a href="{{ route('preachers.index')}} "><i class="fa fa-fw fa-bullhorn"></i> Predicadores</a>
            </li>
            <li>
                <a href="{{ route('sermons.index') }}"><i class="fa fa-fw fa-play"></i> Predicas</a>
            </li>
            <li>
                <a href="{{ route('articles.index') }}"><i class="fa fa-fw fa-file-text"></i> Artículos</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-file"></i> Blank Page</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>