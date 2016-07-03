@extends('template.layout')

@section('title')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		
		<h1>{{ $sermon->title }}</h1>		
		<hr>
		<p class="lead">By {{ $sermon->preacher->nombre }} | <i class="fa fa-calendar fa-fw"></i> {{ $sermon->created_at->diffForHumans() }}</p>
		{!! $sermon->content !!}
		<p>Tags: {{ $sermon->month->fecha }}, {{ $sermon->year->fecha }}</p>
		<input type="hidden" value="{{ $sermon->id }}" id="id_sermon">
	  	<hr>
	  	<div class="success"></div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#notas" data-toggle="tab" aria-expanded="true">Mis notas</a></li>
			<li class=""><a href="#predicas" data-toggle="tab" aria-expanded="true">Otras prédicas de {{ $sermon->preacher->nombre }}</a></li>
			<li class=""><a href="#tags" data-toggle="tab" aria-expanded="true">Artículos relacionados</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade active in" id="notas">
				@include('admin.notes.create')
				<hr>
				<!--<ul class="list-group">
					@foreach($notes as $item)
					  	<li class="list-group-item" style="color:{{ $item->color }}">
					    	<span class="badge">{{ $item->created_at->diffForHumans() }}</span>
					    	{{ $item->contenido }}
					    	<span class="pull-right"><button type="button" value="{{ $item->id }}" onclick="ShowNota(this);" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square fa-fw"></i></button></span> 
					  	</li>
				  	@endforeach
				</ul>-->
				<ul class="list-group">
					<div id="notes">
						
					</div>
				</ul>
			</div>
			<div class="tab-pane fade" id="predicas">
				<p>Food truck fixie </p>
			</div>
			<div class="tab-pane fade" id="tags">
				<p>Etsy mixtape wayfarers, ethical </p>
			</div>
		</div>
		<!--<div>
			<p class="lead">Comentarios</p>
			<div id="comments">
				
			</div>
			@include('admin.comments.create')
		</div>-->
	</div>
	

	@section('scripts')
		<script src="{{ asset('js/myScripts.js') }}"></script>
		<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
		<script src="{{ asset('plugins/moment/moment-with-locales.min.js') }}"></script>		
    @endsection
@endsection