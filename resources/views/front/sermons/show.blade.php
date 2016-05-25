@extends('template.layout')

@section('title')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $sermon->title }}</h1>
		<hr>
		<p class="lead">By {{ $sermon->preacher->nombre }} | <i class="fa fa-calendar fa-fw"></i> {{ $sermon->fecha }}</p>
		<p class="justify">{{ $sermon->content}}</p>
		<p>Tags: {{ $sermon->month->fecha }}, {{ $sermon->year->fecha }}</p>
		<div>
			<p class="lead">Comentarios</p>
			<div id="comments">
				
			</div>
			@include('admin.comments.create')
		</div>
	</div>

	<div>
		<p class="text-capitalize"><strong><em>Jose Perez</em></strong> - 21/05/2016</p>
		<p class="text-capitalize">Este es un comentario</p>
	</div>
	@section('scripts')
		<script src="{{ asset('js/myScripts.js') }}"></script>
    @endsection
@endsection