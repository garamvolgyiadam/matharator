<div class= "col col-xs-12 col-md-4 my-4">
	<div class="card">
	  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h2 class="card-title"><a> {{ $topic->ordering }}. Gyakorlat </a></h2>
		    <p class="card-text"> {{ $topic-> title }} </p>
		    <a href="/learn/{{ $topic->ordering }}" class="btn btn-primary">Feladatok</a>
				<a href="/examples/{{ $topic->ordering }}" class="btn btn-primary">Példa</a>
		  </div>
	</div>
</div>
