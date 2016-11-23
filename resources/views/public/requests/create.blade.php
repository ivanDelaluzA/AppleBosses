<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Tramite - @yield('title')</title>

  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <!-- BEGIN CORE CSS -->

  <link rel="stylesheet" href="{{ asset(elixir('css/style.css')) }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

  <!-- BEGIN SHORTCUT AND TOUCH ICONS -->
  <link rel="shortcut icon" href="{{ asset('assets/globals/img/icons/favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/globals/img/icons/apple-touch-icon.png') }}">

  <!-- END SHORTCUT AND TOUCH ICONS -->
  <script type="text/javascript" src="{{ asset('assets/globals/plugins/modernizr/modernizr.min.js') }}"></script>
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

  </head>
  <body>
    <div class="container-fluid" >
      <div class="row">
      <div class="col-md-12">

        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title"><h4>Tramites de Constancias</h4></div>
          </div><!--.panel-heading-->
          <div class="panel-body">

            <form action="#" class="form-horizontal form-bordered">
              <div class="form-content">
                <div class="form-group">
                  <label class="control-label col-md-3">Tipo de Constacia:</label>
                  <div class="col-md-5">
                    <div class="radioer">
                      <input type="radio" name="docOption" id="radioRecidencia" value="option1" checked="checked">
                      <label for="radioRecidencia">Recidencia</label>
                    
                      <input type="radio" name="docOption" id="radioConducta" value="option1">
                      <label for="radioConducta">Buena Conducta</label>
                    
                      <input type="radio" name="docOption" id="radioAsentamiento" value="option1">
                      <label for="radioAsentamiento">Asentamiento</label>
                    </div>
                  </div>
                </div><!--.form-group-->
                
                <div class="form-group">
                  <div class="row">
                    <h4>Datos Personales</h4>
                  </div>

                  <div class="row">
                    <label class="control-label col-md-3">Nombre</label>
                    <div class="col-md-5">
                      <div class="inputer">
                        <div class="input-wrapper">
                          {!! Form::text('name', null, ["class" => "form-control", "required","maxlength" =>"20"]) !!}
                            @if($errors->has('name'))
                            <span class="badge">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                      </div>
                    </div>
                  </div><!--.row-->

                  <div class="row">
                    <label class="control-label col-md-3">Apellido Parterno</label>
                    <div class="col-md-5">
                      <div class="inputer">
                        <div class="input-wrapper">
                          {!! Form::text('paternal_surname', null, ["class" => "form-control", "maxlength" =>"15","required"]) !!}
                          @if($errors->has('paternal_surname'))
                          <span class="badge">{{ $errors->first('paternal_surname') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div><!--.row-->

                  <div class="row">
                    <label class="control-label col-md-3">Apellido Materno</label>
                      <div class="col-md-5">
                        <div class="inputer">
                          <div class="input-wrapper">
                            {!! Form::text('maternal_surname', null, ["class" => "form-control", "required","maxlength" =>"20"]) !!}
                              @if($errors->has('maternal_surname'))
                              <span class="badge">{{ $errors->first('maternal_surname') }}</span>
                              @endif
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="control-label col-md-3">Colonia</label>
                      <div class="col-md-2">
                        <div class="inputer">
                          <div class="input-wrapper">
                            {!! Form::text('colony', null, ["class" => "form-control", "required","maxlength" =>"20"]) !!}
                              @if($errors->has('colony'))
                              <span class="badge">{{ $errors->first('colony') }}</span>
                              @endif
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="control-label col-md-3">Direccion</label>
                      <div class="col-md-5">
                        <div class="inputer">
                          <div class="input-wrapper">
                            {!! Form::text('address', null, ["class" => "form-control", "required","maxlength" =>"80"]) !!}
                              @if($errors->has('address'))
                              <span class="badge">{{ $errors->first('address') }}</span>
                              @endif
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="control-label col-md-3">Manzana</label>
                      <div class="col-md-2">
                        <div class="inputer">
                          <div class="input-wrapper">
                            {!! Form::text('apple', null, ["class" => "form-control", "required","maxlength" =>"20"]) !!}
                              @if($errors->has('apple'))
                              <span class="badge">{{ $errors->first('apple') }}</span>
                              @endif
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="control-label col-md-3">Seccion</label>
                      <div class="col-md-2">
                        <div class="inputer">
                          <div class="input-wrapper">
                            {!! Form::text('seccion', null, ["class" => "form-control", "required","maxlength" =>"10"]) !!}
                              @if($errors->has('seccion'))
                              <span class="badge">{{ $errors->first('seccion') }}</span>
                              @endif
                          </div>
                        </div>
                      </div>
                  </div>

                </div><!--.form-group-->

                <div class="form-group">
                  <div class="row">
                    <h4>Selecciona Jefe de Manzana</h4>
                  </div>
                  <div class="row">
                    <label class="control-label col-md-3">Busqueda: </label>
                      <div class="col-md-7">
                        <div id="map"></div>
                        
                      </div>
                  </div>
                </div><!--.form-group-->

                <div class="form-group">
                  <div class="row">
                    <h4>Afinidad de Contancia</h4>
                  </div>
                  <label class="control-label col-md-3">Utilizare este documento para:</label>
                  <div class="col-md-5">
                    <div class="inputer">
                      <div class="input-wrapper">
                        {!! Form::textarea('reason',null, ["class" => "form-control","required","maxlength" =>"200" , "placeholder" =>" Describe brevemente para que será untilizada esta constancia... "]) !!}
                          @if($errors->has('reason'))
                          <small>{{ $errors->first('reason') }}</small>
                          @endif
                      </div>
                    </div>
                  </div>
                </div><!--.form-group-->

              </div><!--.form-content-->

              <div class="form-buttons">
                <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-blue">Submit</button>
                    <button type="button" class="btn btn-flat btn-default">Cancel</button>
                  </div>
                </div>
              </div>
            </form>

          </div><!--.panel-body-->
        </div><!--.panel-->

      </div><!--.col-md-12-->
    </div><!--.row-->
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
        $(document).ready(function () {
          Pleasure.init();
          Layout.init();
        });
      </script>

      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH5ZHAyREb0b_HBWVMRTD_sn4naxflMfY&signed_in=true&libraries=places&callback=initMap"></script>

      <!-- END *INITIALIZATION-->
    </body>
    </html>