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

	<div class="test-div" style="display:none;">
		@foreach($exercises as $exercise)
			<ul class="list-group " "col col-xs-12 col-md-12 md-12">
				<li class="list-group-item list-group-item-warning">{{ $exercise->id }}. {{ $exercise->question }}</li>
				@foreach($exercise->getAnswersRandomOrder() as $answer)
				<li class="list-group-item li-answer">
					<label class="m-0">
							<input type="radio" class="input-answer" name= "{{ $exercise->id }}"
							value="{{ $answer[0] }}" style="display:none">
						{{ $loop->index+1 }}. {{ $answer[1] }} (Titok: {{ $answer[0] }}) </label>
					 {{-- $answer[0], eredeti sorrend sorszáma, $answer[1] cserélt sorrend sorszáma --}}
				</li>
				@endforeach
			</ul>
		@endforeach
		<input type="submit" value="Kiértékelés !" class="btn btn-success" onclick="doResult();">

		<input type="submit" value="Új teszt!" class="btn btn-success" onclick="window.location='/test';">
	</div>

	<script> {{-- kiértékeli a válaszokat --}}
		function doResult() {
				{{-- rászűrök a gombokra, amik ki vannak pipálva, és ha nem 1,
					azaz a helyes válasz, akkor piros lesz a háttér.
					 azért kell a szülőjét venni, mert egy <label> tagben van --}}
				jQuery('input[type=radio]:checked').filter('[value!=1]').parent().parent().
					css("background-color","red");

				{{-- minden jó válasz zöld lesz --}}
				jQuery('input[type=radio]').filter('[value=1]').parent().parent().css("background-color","green");

				{{-- kiértékelés után nem lehet másik választ pipálni --}}
				jQuery('input[type=radio]').attr('disabled',true);
		}
	</script>

	<script>
			//amikor betoltodott az oldal
			document.addEventListener("DOMContentLoaded", function(event) {
				//az osszes <li> -re rarakunk a click eventre egy nevtelen fuggvenyt
				$(document).on('click', '.li-answer', function () {
					if (!$(this).find('input').attr('disabled')) {
						$(this).find('input').click();
					}
				});

				// LI atszinezeses kivalasztas
				// az osszes radio inputnal kattintas eseten egy nevtelen fuggvenyt
				// akarunk meghivni
				$(document).on('click', '.input-answer', function (e) {
					e.stopPropagation();
					// osszes LI szinet feherre
					$(this).closest('ul').find('li.li-answer').css('background-color','white');
					// sajat LI-nk szinet kekre
					$(this).closest('li.li-answer').css('background-color','#9bc2cf');

				});
			});

/*
jQuery('input[type=radio]:checked').parent().parent()
 .css("background-color","#9bc2cf");
		function changeBG() { {{-- kattintásra hátteret vált --}}
			document.addEventListener("DOMContentLoaded", function() {

			});
		}
*/

	</script>

 <!--
 $(document).on('click', '.addproduct', function () {
	 'jQuery('input[type=radio]:'checked').parent().parent()
		 .css("background-color","#9bc2cf");

	 jQuery('input[type=radio]:not(:checked)').parent().parent()
		 .css("background-color","white");
 });
-->

@endsection
