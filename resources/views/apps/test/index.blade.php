@extends('layouts.app')

@section('title', 'Diszkrét matematika gyakorló oldal')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<h1>Válassza ki a témaköröket!</h1>
	</div>
</div>

<form method="post" action="/test/dotest">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- hidden elrejtett token, a laravelnek kell--}}

	<div class="row">
	  <div class="col-sm-12">

			@foreach($topics as $topic)
				<label><input type="checkbox" name="topic[]" value="{{ $topic->id }}"> {{ $topic->title }} </label><br>
			@endforeach

		</div>
	</div>

	<div class="row">
	  <div class="col-sm-12">
			<input type="submit" value="Mehet!" class="btn btn-success">
		</div>
	</div>

</form>
@endsection
