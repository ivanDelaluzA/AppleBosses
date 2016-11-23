<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> @yield('title')</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-touch-fullscreen" content="yes">
	<!-- BEGIN CORE CSS -->
	
	<link rel="stylesheet" href="{{ asset('assets/admin1/css/admin1.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/css/elements.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/css/style.css') }}">
	


	<!-- END CORE CSS -->

	<!-- BEGIN PLUGINS CSS -->
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/rickshaw/rickshaw.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/bxslider/jquery.bxslider.css') }}">
	
	<!--COLOR SELECTOR -->
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/pnikolov-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/minicolors/jquery.minicolors.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/clockface/css/clockface.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
	<!--COLOR SELECTOR -->

	<link rel="stylesheet" href="{{ asset('assets/globals/css/plugins.css') }}">
	<!-- END PLUGINS CSS -->

	<!-- BEGIN PLUGINS CSS -->
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/datatables/media/css/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/datatables/themes/bootstrap/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/css/plugins.css') }}">
	<!-- END PLUGINS CSS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="{{ asset('assets/globals/img/icons/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/globals/img/icons/apple-touch-icon.png') }}">
	<!-- END SHORTCUT AND TOUCH ICONS -->

	<script src="{{ asset('assets/globals/plugins/modernizr/modernizr.min.js') }}"></script>

	

	<link href="{{ asset('assets/globals/css/select2.min.css') }}" rel="stylesheet" />
</head>
<body class="theme-teal" style="background-color: WHITE">
	@include('partials.mainMenu')
	<div class="content">
		<div class="page-header full-content bg-black">
			<div class="row">

			
				<div class="col-md-12">
							<img class="img-responsive" src="{{ asset('images/indice.png') }}" alt="">
							<h1 class="pull-right">Córdoba <small>Jefes de Manzana</small></h1>
						</div>
						
					</div><!--.row-->
					</div><!--.page-header-->
				@yield('content')

			</div>
			<!--.content-->

			@include('partials.hiddenMenu')

			<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="{{ asset('assets/globals/js/global-vendors.js') }}"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<script src="{{ asset('assets/globals/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/audiojs/audiojs/audio.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/d3/d3.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/gauge/gauge.min.js') }}"></script>
	

	<!-- BEGIN PLUGINS AREA -->
	<script src="{{ asset('assets/globals/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/datatables/themes/bootstrap/dataTables.bootstrap.js') }}"></script>
	
	<!--COLOR SELECTOR -->
	<script src="{{ asset('assets/globals/plugins/pnikolov-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/minicolors/jquery.minicolors.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/clockface/js/clockface.js') }}"></script>
	<!--COLOR SELECTOR -->

	<!-- END PLUGINS AREA -->

	<!-- PLUGINS INITIALIZATION AND SETTINGS -->

	<!--COLOR SELECTOR -->
	<script src="{{ asset('assets/globals/scripts/forms-pickers.js') }}"></script>
	<!--COLOR SELECTOR -->

	<script src="{{ asset('assets/globals/scripts/tables-datatables.js') }}"></script>
	<!-- END PLUGINS INITIALIZATION AND SETTINGS -->
	
	<!-- PLEASURE -->
	<script src="{{ asset('assets/globals/js/pleasure.js') }}"></script>
	<!-- ADMIN 1 -->
	<script src="{{ asset('assets/admin1/js/layout.js') }}"></script>

	<script src="{{ asset('assets/globals/scripts/sliders.js') }}"></script>
	
	<script src="{{ asset('assets/globals/js/select2.min.js') }}" rel="stylesheet"></script>

	<!-- BEGIN INITIALIZATION-->
	<script>
	$(document).ready(function () {
		$('#dataTable').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontraron Registros",
            "info": "Mostrar página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Se encontraron _MAX_ del total de Registros)"
            
        }
    	} );

		Pleasure.init();
		Layout.init();
		TablesDataTables.init();
		FormsPickers.init();// COLOR SELECTOR
    } );
	</script>
	
	<!-- END INITIALIZATION-->
	<script type="text/javascript">
		@yield('scripts')
	</script>
</body>
</html>