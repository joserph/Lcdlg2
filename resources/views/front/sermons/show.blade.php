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
		<ul class="nav nav-tabs">
			<li class="active"><a href="#notas" data-toggle="tab" aria-expanded="false">Mis notas</a></li>
			<li class=""><a href="#predicas" data-toggle="tab" aria-expanded="true">Otras prédicas de {{ $sermon->preacher->nombre }}</a></li>
			<li class=""><a href="#tags" data-toggle="tab" aria-expanded="true">Artículos relacionados</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade" id="notas">
				<div id="notes">
					
				</div>
				@include('admin.notes.create')
			</div>
			<div class="tab-pane fade active in" id="predicas">
				<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
			</div>
			<div class="tab-pane fade" id="tags">
				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
			</div>
		</div>
		<hr>
		<div>
			<p class="lead">Comentarios</p>
			<div id="comments">
				
			</div>
			@include('admin.comments.create')
		</div>
	</div>
	

	@section('scripts')
		<script src="{{ asset('js/myScripts.js') }}"></script>
    @endsection
@endsection