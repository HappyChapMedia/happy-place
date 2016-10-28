      var map;
      function initialize() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: new google.maps.LatLng(48.749358, -122.480198),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          disableDefaultUI: false,
          zoomControl: true,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          styles: [
            {
              featureType: 'areaOfInterest',
              stylers:[
                {saturation : -100},
                {lightness  : 25}
              ]
            },
            {
              featureType:"poi",
              stylers:[
                {visibility: "on"}
              ]
            },
            {
              featureType: 'transit.station.bus',
              stylers: [
                { visibility: 'off' }
              ]
            }
          ]
        });

        var iconBase = '../wp-content/themes/happy-place/assets/images/';
        var icons = {
          hplogo: {
            title:"The Happy Place - shared office & retail space!",
            icon: iconBase + 'happy-place-map-marker.png'
          }
        };

        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
          clickable: false,
            map: map
          });
        }

        var features = [
          {
            position: new google.maps.LatLng(48.749358, -122.480198),
            type: 'hplogo'
          }
        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }

       // Define the LatLng coordinates for the outer path.
        var happyplace = [
          {lat: 48.749491, lng: -122.480444}, // north west 
          {lat: 48.749269, lng: -122.480101}, // south west   
          {lat: 48.749319, lng: -122.480027}, // south east   
          {lat: 48.749540, lng: -122.480370}  // north east
        ];

        map.data.setStyle({
          fillColor: 'grey',
          strokeWeight: 0
        });

        map.data.add({geometry: new google.maps.Data.Polygon([happyplace])});
      }
