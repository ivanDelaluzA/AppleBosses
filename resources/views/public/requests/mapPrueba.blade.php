<!DOCTYPE html>
<html>
  <head>
    <title>Save a Place</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
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
    <div id="map"></div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH5ZHAyREb0b_HBWVMRTD_sn4naxflMfY&signed_in=true&libraries=places&callback=initMap"></script>
  </body>
</html>