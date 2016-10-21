      var map;
      function initialize() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: new google.maps.LatLng(48.42060, -122.33634),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          disableDefaultUI: true,
          zoomControl: false,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          styles: [
            {
              featureType: 'areaOfInterest',
              stylers:[
                {saturation : -100},
                {lightness  : 25},
                {visibility : "simplified"}
              ]
            },
            {
              featureType:"poi",
              stylers:[
                {visibility: "off"}
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

        var iconBase = '../wp-content/themes/c-square/assets/images/';
        var icons = {
          tsc: {
            title:"Hello World!",
            icon: iconBase + 'tsc-map-marker.png'
          },
          csquare: {
            title:"Hello World!",
            icon: iconBase + 'c-square-map-marker.png'
          },
          svfc: {
            title:"Hello World!",
            icon: iconBase + 'svfc-map-marker.png'
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
            position: new google.maps.LatLng(48.42007, -122.335710),
            type: 'csquare'
          }, {
            position: new google.maps.LatLng(48.420202, -122.336025),
            type: 'tsc'
          }, {
            position: new google.maps.LatLng(48.42075, -122.336690),
            type: 'svfc'
          }
        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }

       // Define the LatLng coordinates for the outer path.
        var svfc = [
          {lat: 48.421169, lng: -122.336731}, // north west
          {lat: 48.420769, lng: -122.336961}, // south west
          {lat: 48.420680, lng: -122.336599}, // south east
          {lat: 48.421156, lng: -122.336325}  // north east
        ];


        var csquare = [
          {lat: 48.420269, lng: -122.336087}, // north west
          {lat: 48.420142, lng: -122.336155}, // south west
          {lat: 48.420014, lng: -122.335625}, // south east
          {lat: 48.420142, lng: -122.335554}  // north east
        ];
        
        map.data.setStyle({
          fillColor: 'green',
          strokeWeight: 0
        });

        map.data.add({geometry: new google.maps.Data.Polygon([csquare, svfc])});
      }
