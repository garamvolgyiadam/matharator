@extends('layouts.app')

@section('title', 'Diszkrét matematika gyakorló oldal')

@section('content')

	<div class="row">

			@foreach ($topics as $topic)
			    @include ('apps.topics.listitem')
			@endforeach

	</div>

@endsection
