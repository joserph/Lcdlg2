<div class="text-center">
	<!-- Preview menú -->
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
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
</div>