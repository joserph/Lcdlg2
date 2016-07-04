<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<!-- Navigation -->        
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.index') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="perfil" class="img-rounded logo-app" width="40">
        </a>
        <a class="navbar-brand titulo-app" href="{{ route('admin.index') }}">Church CMS</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">                       
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
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links --> 

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">                    
                    <li>
                        <a href="{{ route('admin.index') }}"><i class="fa fa-home fa-fw"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @if(Auth::check() && (Auth::user()->id_rol == 2))
                                <li><a href="#"><i class="fa fa-dashboard fa-fw"></i> Perfil</a></li>
                                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
                                <li><a href="#"><i class="fa fa-refresh fa-fw"></i> Cambiar contraseña</a></li>
                            @elseif(Auth::check() && (Auth::user()->id_rol == 1))
                                <li><a href="#"><i class="fa fa-dashboard fa-fw"></i> Perfil</a></li>
                                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
                                <li><a href="#"><i class="fa fa-refresh fa-fw"></i> Cambiar contraseña</a></li>
                            @elseif(Auth::check() && (Auth::user()->id_rol == 0))
                                <li><a href="#"><i class="fa fa-dashboard fa-fw"></i> Perfil</a></li>
                                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
                                <li><a href="#"><i class="fa fa-refresh fa-fw"></i> Cambiar contraseña</a></li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Administración</a></li>
                            @else
                                <li><a href="#"><i class="fa fa-sign-in fa-fw"></i> Iniciar sesión</a></li>
                                <li><a href="#"><i class="fa fa-plus-circle fa-fw"></i> Regístrate</a></li>
                                <li><a href="#"><i class="fa fa-key fa-fw"></i> Recuperar contraseña</a></li>
                            @endif
                        </ul>
                        <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="{{ route('church.index') }}"><i class="fa fa-fw fa-institution"></i> Iglesia</a>
                            </li>
                            <li class="active">
                                <a href="/" target="_blanck"><i class="fa fa-fw fa-eye"></i> Página principal</a>
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
                                <a href="{{ route('menu.index') }}"><i class="fa fa-fw fa-bars"></i> Menú</a>
                            </li>
                            <li>
                                <a href="{{ route('ads.index') }}"><i class="fa fa-fw fa-bell"></i> Anuncios</a>
                            </li>
                            <li>
                                <a href="{{ route('verses.index') }}"><i class="fa fa-fw fa-book"></i> Versículos</a>
                            </li>
                            <li>
                                <a href="{{ route('comments.index') }}"><i class="fa fa-fw fa-comments"></i> Comentarios</a>
                            </li>
                             <li>
                                <a href="{{ route('prayers.index') }}"><i class="fa fa-fw fa-commenting"></i> Peticiones de Oración</a>
                            </li>
                        </ul>
                    </div>
            <!-- /.sidebar-collapse -->
        </div>
            <!-- /.navbar-static-side -->   
</nav>

