@extends('template.layout')

@section('title')

@section('content')
	<!-- Anuncios -->
	<ul class="nav nav-tabs">
		@foreach($anuncios as $item)
			@if($contador == 0)
  				<li class="active"><a href="#{{ $item->id }}" data-toggle="tab">{{ $item->nombre }}</a></li>
  			@else
  				<li><a href="#{{ $item->id }}" data-toggle="tab">{{ $item->nombre }}</a></li> 
  			@endif
  			<?php
  				$contador ++;
  			?>
  		@endforeach		
	</ul>
	<div id="myTabContent" class="tab-content">
		<?php
  			$contador = 0;
  		?>
		@foreach($anuncios as $item)
			@if($contador == 0)
		  		<div class="tab-pane fade active in" id="{{ $item->id }}">
		    		<p>{{ $item->contenido }}</p>
		  		</div>
		  	@else
				<div class="tab-pane fade" id="{{ $item->id }}">
    				<p>{{ $item->contenido }}</p>
  				</div>
		  	@endif
		  	<?php
  				$contador ++;
  			?>
  		@endforeach
	</div>
	<!-- /. Anuncios -->

@endsection