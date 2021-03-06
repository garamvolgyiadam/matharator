@extends('layouts.app')

@section('title', 'Diszkrét matematika gyakorló oldal')

@section('content')

	<script type="text/javascript" async
		src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML">
	</script>

	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({
			tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
		});

		MathJax.Hub.Register.StartupHook("End",function () {
				//alert('mathjax lefutott ;)');
				$('.test-div').fadeIn(2000);
		 });
	</script>
	<div class="row">

    @foreach ($testitems as $testitem)
        @include('apps.usertest.showitem')
    @endforeach

	</div>

@endsection
