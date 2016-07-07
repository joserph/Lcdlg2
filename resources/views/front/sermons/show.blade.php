@extends('template.layout')

@section('title')

@section('content')
	<div class="col-md-10 col-md-offset-1">
		@if(Auth::user())
			<div class="col-md-8">
		@else
			<div class="col-md-12">
		@endif
				<h1>{{ $sermon->title }}</h1>		
				<hr>
				<p class="lead">By {{ $sermon->preacher->nombre }} | <i class="fa fa-calendar fa-fw"></i> {{ $sermon->created_at->diffForHumans() }}</p>
				{!! $sermon->content !!}
				<p>Tags: {{ $sermon->month->fecha }}, {{ $sermon->year->fecha }}</p>
				<input type="hidden" value="{{ $sermon->id }}" id="id_sermon">
			</div>
		@if(Auth::user())
			<div class="col-md-4">
				<div class="successNote"></div>
				<ul class="nav nav-tabs">
					@if(Auth::user())
						<li class="active"><a href="#notas" data-toggle="tab" aria-expanded="true">Mis notas</a></li>
					@endif
				</ul>
				<!-- Notes, Preachers and Tags -->
				<div id="myTabContent" class="tab-content">
					@if(Auth::user())
						<div class="tab-pane fade active in" id="notas">
							<hr>
							<ul class="list-group">
								<div id="notes">
									
								</div>
							</ul>
							<hr>
							@include('admin.notes.create')
						</div>
					@endif
				</div>
			</div>
		@endif
		<!-- Nav Tabs Preachers and Tags -->
	  	<hr>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#predicas" data-toggle="tab" aria-expanded="true">Otras prédicas de {{ $sermon->preacher->nombre }}</a></li>
			<li class=""><a href="#tags" data-toggle="tab" aria-expanded="true">Artículos relacionados</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade active in" id="predicas">
				<div class="page-header">
				  	<h3>Prédicas de <small>{{ $sermon->preacher->nombre }}</small></h3>
				</div>
				<div class="row">
				@foreach($preacherSermons as $itemSermon)				
				  	<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
				      		<div class="caption">
				        		<h4 class="text-center">{{ $itemSermon->title }}</h4>
				        		<p class="text-center">~ {{ $itemSermon->preacher->nombre }} ~</p>
				      		</div>
					    </div>
				  	</div>				
				@endforeach
				</div>
			</div>
			<div class="tab-pane fade" id="tags">
				<p>Etsy mixtape wayfarers, ethical </p>
			</div>
		</div>
		<hr>
		<!-- Comment -->
		
			<div>
				<p class="lead">Comentarios</p>
				@if(Auth::user())
					@include('admin.comments.create')
				@endif
				
				<div id="comments">
					
				</div>				
			</div>
		
	</div>
	

	@section('scripts')
		<script src="{{ asset('js/myScripts.js') }}"></script>
		<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
		<script src="{{ asset('plugins/moment/moment-with-locales.min.js') }}"></script>		
    @endsection
@endsection