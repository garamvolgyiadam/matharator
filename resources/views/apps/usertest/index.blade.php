@extends('layouts.app')

@section('title', 'Diszkrét matematika gyakorló oldal')

@section('content')

	<div class="row">

    @foreach ($tests as $test)
        @include('apps.usertest.listitem')
    @endforeach

	</div>

@endsection
