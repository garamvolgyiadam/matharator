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
			$('.list-group').fadeIn(2000);
	 });
</script>

{{--
  Itt azt kene csinalni, h amikor felbontast valt a kijelzo, a MathJaxxal ujra kene
  rendereltetni a matematikai kepleteket, hogy pl. egy kisebb monitoron
  mar tordeltebben jelenjenek meg, mert alapbol amit renderel, az nem
  reszponziv
<script type="text/javascript">
  $(window).resize(function() {
    MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
    alert('ok!');
  });
</script>
--}}

  <div class="row">

    @foreach ($exercises as $exercise)

      @include('apps.exercises.listitem')      

    @endforeach

  </div>

@endsection
