<style>
	.navbar-default {
		background-color: #663399;
		border-color: #8e44ad;
	}
	.navbar-default .navbar-brand {
		color: #ecf0f1;
	}
	.navbar-default .navbar-brand:hover,
	.navbar-default .navbar-brand:focus {
		color: #ecdbff;
	}
	.navbar-default .navbar-text {
		color: #ecf0f1;
	}
	.navbar-default .navbar-nav > li > a {
		color: #ecf0f1;
	}
	.navbar-default .navbar-nav > li > a:hover,
	.navbar-default .navbar-nav > li > a:focus {
		color: #ecdbff;
	}
	.navbar-default .navbar-nav > .active > a,
	.navbar-default .navbar-nav > .active > a:hover,
	.navbar-default .navbar-nav > .active > a:focus {
		color: #ecdbff;
		background-color: #8e44ad;
	}
	.navbar-default .navbar-nav > .open > a,
	.navbar-default .navbar-nav > .open > a:hover,
	.navbar-default .navbar-nav > .open > a:focus {
		color: #ecdbff;
		background-color: #8e44ad;
	}
	.navbar-default .navbar-toggle {
		border-color: #8e44ad;
	}
	.navbar-default .navbar-toggle:hover,
	.navbar-default .navbar-toggle:focus {
		background-color: #8e44ad;
	}
	.navbar-default .navbar-toggle .icon-bar {
		background-color: #ecf0f1;
	}
	.navbar-default .navbar-collapse,
	.navbar-default .navbar-form {
		border-color: #ecf0f1;
	}
	.navbar-default .navbar-link {
		color: #ecf0f1;
	}
	.navbar-default .navbar-link:hover {
		color: #ecdbff;
	}

	@media (max-width: 767px) {
		.navbar-default .navbar-nav .open .dropdown-menu > li > a {
			color: #ecf0f1;
		}
		.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
		.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
			color: #ecdbff;
		}
		.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
		.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
		.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
			color: #ecdbff;
			background-color: #8e44ad;
		}
	}
	

</style>

<!-- Navigation -->
<div class="row"  style="padding-top: 20px;padding-bottom: 10px;background-color: #ECF0F1">
	<div class="col-md-3 col-md-offset-1">
		<img class="img-responsive" src="{{ asset('images/indice.PNG') }}">
	</div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-default nav-fluid" style="margin-left: -15px;
margin-right: -15px;border-radius: 0px;">
<div>
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">
			<!-- 			<img class="img-responsive" src="{{ asset('images/Head21.PNG') }}"> -->			
			<img alt="Brand" width="25" height="25" src="{{ asset('images/brand.PNG') }}">
		</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-left">
		<li><a class="active" href="requests/create">Comenzar Tramite</a></li>	  
		</ul>

		<ul class="nav navbar-nav navbar-right">

			<li><a href="/preguntas-frecuentes'">Preguntas Frecuentes</a></li>
			<li><a href="#CONTACTO">Contacto</a></li>
		</ul>
	</div>
</div>
</nav>