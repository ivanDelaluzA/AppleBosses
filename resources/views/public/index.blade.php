@extends('layouts.masterSimple')
@section('title', 'Inicio')
@section('content')


<div class="row carousel-holder" >
	<div >
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="slide-image" style="width: 100%;" src="{{ asset('images/background.PNG') }}" alt="">
					{{-- <img class="slide-image" src="http://placehold.it/1300x400/4183D7/C5EFF7?text=Guelcom" alt=""> --}}
				</div>
				<div class="item">
					<img class="slide-image " style="width: 100%;" src="{{ asset('images/background.PNG') }}" alt="">						</div>
					<div class="item">
						<img class="slide-image "  style="width: 100%;" src="{{ asset('images/background.PNG') }}" alt="">						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>

		<hr class="colors">

		<div class="row" style="background-color: #3A539B; padding: 20px; color: white;">
			<h1 style="text-align: center">¿Qué tipo de constancia puedo tramitar?</h1>
			<hr>
			<div class="col-md-4   text-center">
				<img class="img-circle img-responsive img-center" src="{{ asset('images/RESIDENCIA.PNG') }}" alt="">
		
				<h3 style="font-size: 19px;">RESIDENCIA</h3>
				<br>
				<p class="text-justify">These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>

			</div>
			<div class="col-md-4  text-center">
				<img class="img-circle img-responsive img-center" src="{{ asset('images/CONDUCTA.PNG') }}" alt="">
	
				<h3 style="font-size: 19px;">CONDUCTA </h3>
				<br>
				<p class="text-justify" style="text-center">The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				
			</div>
			<div class="col-md-4  text-center">
				<img class="img-circle img-responsive img-center" src="{{ asset('images/Asenta.png')}}" alt="">

				<h3 style="font-size: 17px;">ASENTAMIENTO DE REGISTRO CIVIL</h3>
				<br>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

			</div>
		</div>
		<hr>

		@stop