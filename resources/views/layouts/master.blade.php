<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Ciudadano - @yield('title')</title>

	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- BEGIN CORE CSS -->

	<link rel="stylesheet" href="{{ asset(elixir('css/style.css')) }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- END CORE CSS -->

	<!-- BEGIN PLUGINS CSS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="{{ asset('assets/globals/img/icons/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/globals/img/icons/apple-touch-icon.png') }}">

	<!-- END SHORTCUT AND TOUCH ICONS -->
	<script type="text/javascript" src="{{ asset('assets/globals/plugins/modernizr/modernizr.min.js') }}"></script>

	<style type="text/css">
		body {
			background-color: #ECF0F1 }
			.radioer{
				text-align: left;
			}
			.switcher{
				text-align: center;
			}
			p.switch{
				display: inline;
			}
			small{
				font-size: 13px;
			}
			.layout-device, .layout-tablet{
				margin-top: 50px;
			}
			#showHidePass{
				opacity: 0;
				padding:0;
			}
			.fileinput-filename{
				overflow:hidden; /* Escondemos la parte sobrante */
				white-space:nowrap; /* Indicamos que no realice salto de linea si no cabe en la anchura indicada */
				text-overflow: ellipsis; /* Ponemos los dos puntos */
			}
			.centerFileInput {
				display: inline;
				margin-top: 10px;
				text-align: left;
			}
			.fileinput.input-group {
				display: inline;
			}
			.btnMargin{
				margin-top:10px;
			}
			.optionnav{
				font-size: 14px;
			}
			#map {
		        height: 350px;		      
		    }
			
			

		</style>
		
	</head>
	<body>
		<div class="container-fluid" >
			@include('partials.menuOp')
			<div class="row">
				@yield('content')

			</div>
			<!-- BEGIN GLOBAL AND THEME VENDORS -->
			<script src="{{ asset('assets/globals/js/global-vendors.js') }}"></script>
			<!-- END GLOBAL AND THEME VENDORS -->

			<!-- BEGIN PLUGINS AREA -->
			<script src="{{ asset('assets/globals/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
			<script src="{{ asset('assets/globals/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
			<script src="{{ asset('assets/globals/plugins/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>   <!-- END PLUGINS AREA -->

			<!-- PLUGINS INITIALIZATION AND SETTINGS -->
			<script src="{{ asset('assets/globals/scripts/forms-wizard.js') }}"></script>
			<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

			<!-- PLEASURE -->
			<script src="{{ asset('assets/globals/js/pleasure.js') }}"></script>
			<!-- ADMIN 1 -->
			<script src="{{ asset('assets/admin1/js/layout.js') }}"></script>

			<!-- BEGIN INITIALIZATION-->
			<script>

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: {lat: 18.894303, lng: -96.935227}
  });

  
    var marker = new google.maps.Marker({
        map: map,
        // Define the place with a location, and a query string.
        place: {
          location: {lat: 18.894303 , lng: -96.935227 },
          query: 'Google, Cordoba, Veracruz'

        },
    });

    var marker = new google.maps.Marker({
        map: map,
        // Define the place with a location, and a query string.
        place: {
          location: {lat: 18.893821 , lng: -96.935749 },
          query: 'Google, Cordoba, Veracruz'

        },
    });

    var marker = new google.maps.Marker({
        map: map,
        // Define the place with a location, and a query string.
        place: {
          location: {lat: 18.892933 , lng: -96.935218 },
          query: 'Google, Cordoba, Veracruz'

        },
    });

    var marker = new google.maps.Marker({
        map: map,
        // Define the place with a location, and a query string.
        place: {
          location: {lat: 18.891801 , lng: -96.933748 },
          query: 'Google, Cordoba, Veracruz'

        },
    });

    var marker = new google.maps.Marker({
        map: map,
        // Define the place with a location, and a query string.
        place: {
          location: {lat: 18.896122 , lng: -96.935966 },
          query: 'Google, Cordoba, Veracruz'

        },
    });

    var marker = new google.maps.Marker({
        map: map,
        // Define the place with a location, and a query string.
        place: {
          location: {lat: 18.894726 , lng: -96.937262 },
          query: 'Google, Cordoba, Veracruz'

        },
    });


  // Opens the InfoWindow when marker is clicked.
  marker.addListener('click', function() {
    alert("I am an alert box!");
  });

}

    </script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqPtrytyiXKh610gupYOqseO3-ddP6bNc&callback=initMap&signed_in=true" async defer>
			</script>
			<script>
				$(document).ready(function () {
					Layout.init();
					FormsWizard.init();
				});
			</script>
			@yield('scripts')

			<!-- END INITIALIZATION-->
		</body>
		</html>