//intialize the map
function initialize() {
  var mapOptions = {
    zoom: 13,
    scrollwheel: false,
    center: new google.maps.LatLng(40.925372, -74.27654)
  };

var map = new google.maps.Map(document.getElementById('map-single'),
      mapOptions);
	
var styles = [
    {
        "stylers": [
            {
                "hue": "#0f1341"
            },
            {
                "saturation": 0
            },
            {
                "gamma": 0
            },
            {
                "lightness": 0
            }
        ]
    },
	{
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#03a9f5"
            },
            {
                "lightness": 40
            }
        ]
    }
]

map.setOptions({styles: styles});


// MARKERS
/****************************************************************/

//add a marker1
var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    icon: 'images/pin.png'
});


// INFO BOXES
/****************************************************************/

}

google.maps.event.addDomListener(window, 'load', initialize);

