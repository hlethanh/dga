// This example creates a 2-pixel-wide red polyline showing the path of
// the first trans-Pacific flight between Oakland, CA, and Brisbane,
// Australia which was made by Charles Kingsford Smith.

function initMap() {

	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 8,
	  /*center: {lat: 0, lng: -180},*/
	  /*center: {lat: 50.82578, lng: 4.389595},*/
	  center: {lat: 50.8504500, lng: 4.3487800},
	  mapTypeId: 'terrain'
	});

	var tabMarker = [
	  { lat : 50.8504500, lng : 4.3487800, title : 'Bruxelles'  },
	  { lat :50.454241, lng : 3.956659, title : 'Mons'  },
	  { lat :51.219448, lng : 4.402464, title : 'Anvers'  },
	  { lat : 50.467388, lng :  4.871985,title : 'Namur' },
	  { lat : 51.06987837, lng :  2.55996733, title : '' },
	  { lat : 51.07014829, lng :  2.55968015, title : '' },
	];

	var flightPlanCoordinates = [
	  { lat : 50.8504500, lng : 4.3487800, title : 'Bruxelles'  },
	  { lat :50.454241, lng : 3.956659, title : 'Mons'  },
	  { lat :51.219448, lng : 4.402464, title : 'Anvers'  },
	  { lat : 50.467388, lng :  4.871985,title : 'Namur' },
	  { lat : 51.06987837, lng :  2.55996733, title : '' },
	  { lat : 51.07014829, lng :  2.55968015, title : '' },
	];

	//console.log(flightPlanCoordinates);

	var flightPath = new google.maps.Polyline({
	  path: flightPlanCoordinates,
	  geodesic: true,
	  strokeColor: '#FF0000',
	  strokeOpacity: 1.0,
	  strokeWeight: 2
	});

	flightPath.setMap(map);
	createMarker( flightPlanCoordinates, map );
}

function createMarker( tab, map){

	var oLatLng, oMarker, data;
	var i, nb = tab.length;

	for( i = 0; i < nb; i++ ){
	  
	  data = tab[i];
	  oLatLng = new google.maps.LatLng( data.lat, data.lng);
	  
	  oMarker = new google.maps.Marker({
	    position : oLatLng,
	    map : map,
	    title : data.title
	  });

  	var contentString = '<div id="content">'+
	    '<div id="siteNotice">'+
	    '</div>'+
	    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
	    '<div id="bodyContent">'+
	    '<p> ' +
	    'Bonjour '+ data.title +
	    '</p>'+
	    '</div>'+
	    '</div>';
	  
	  	var activeInfoWindow;
	  	var infoWindow = new google.maps.InfoWindow();
	  	
		google.maps.event.addListener(oMarker,'click', ( function( oMarker, contentString, infoWindow ){
	          return function() {
              	google.maps.event.addListener(oMarker, 'click', function() {

              		activeInfoWindow&&activeInfoWindow.close();
              	
	                infoWindow = new google.maps.InfoWindow();
	                infoWindow.setContent(contentString);
	              	infoWindow.open( map, oMarker);

	              	activeInfoWindow = infoWindow;
	            });
	          };
	      })(oMarker,contentString,infoWindow));
	}
}