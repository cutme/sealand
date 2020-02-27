const loadGoogleMapsApi = require('load-google-maps-api');

(function() {
    
    const obj = document.getElementsByClassName('js-map');
    
    let mapenable = false, int;

    const initMap = function(el) {
        loadGoogleMapsApi({
            key: 'AIzaSyDzv4gozpcF9CjrI6OWHpLavj2hTLfH4IY'
            }).then(function (googleMaps) {
            
            const lat = Number(el.getAttribute('data-lat')),
                  lng = Number(el.getAttribute('data-lng')),
                  myLatLng = new google.maps.LatLng(lat, lng),
                  markerWidth = 181,
                  markerHeight = 194,
                  mapStyle = [
            {
                'featureType': 'all',
                'elementType': 'all',
                'stylers': [
                    {
                        'visibility': 'on'
                    }
                ]
            },
            {
                'featureType': 'all',
                'elementType': 'labels',
                'stylers': [
                    {
                        'visibility': 'on'
                    }
                ]
            },
            {
                'featureType': 'administrative.country',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'visibility': 'on'
                    }
                ]
            },
            {
                'featureType': 'administrative.country',
                'elementType': 'geometry.fill',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'landscape',
                'elementType': 'all',
                'stylers': [
                    {
                        'color': '#ffffff'
                    }
                ]
            },
            {
                'featureType': 'poi',
                'elementType': 'all',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'poi',
                'elementType': 'labels.icon',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'road',
                'elementType': 'all',
                'stylers': [
                    {
                        'saturation': -100
                    },
                    {
                        'lightness': 45
                    },
                    {
                        'color': '#c0ccd3'
                    }
                ]
            },
            {
                'featureType': 'road',
                'elementType': 'labels',
                'stylers': [
                    {
                        'color': '#386386'
                    }
                ]
            },
            {
                'featureType': 'road',
                'elementType': 'labels.text',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'road',
                'elementType': 'labels.text.fill',
                'stylers': [
                    {
                        'visibility': 'on'
                    }
                ]
            },
            {
                'featureType': 'road.arterial',
                'elementType': 'all',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'road.local',
                'elementType': 'geometry.fill',
                'stylers': [
                    {
                        'visibility': 'on'
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            
            {
                'featureType': 'transit',
                'elementType': 'all',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'water',
                'elementType': 'all',
                'stylers': [
                    {
                        'color': '#bee3e9'
                    },
                    {
                        'visibility': 'on'
                    }
                ]
            },
            {
                'featureType': 'water',
                'elementType': 'labels',
                'stylers': [
                    {
                        'visibility': 'simplified'
                    }
                ]
            },
            {
                'featureType': 'water',
                'elementType': 'labels.text',
                'stylers': [
                    {
                        'visibility': 'on'
                    }
                ]
            },
            {
                'featureType': 'water',
                'elementType': 'labels.icon',
                'stylers': [
                    {
                        'visibility': 'on'
                    }
                ]
            }];
        
            const image = {
                url: el.getAttribute('data-marker'),
                size: new google.maps.Size(markerWidth, markerHeight),
				scaledSize: new google.maps.Size(markerWidth, markerHeight),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(markerWidth/2, markerHeight),
				labelOrigin: new google.maps.Point(0, markerHeight)
            }
            
            const map = new googleMaps.Map(el, {
                center: myLatLng,
                disableDefaultUI: true,
                zoom: 17,
                styles: mapStyle
            })            
			
			const marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				draggable: false,
				zIndex: 20,
				icon: image,
				animation: google.maps.Animation.DROP,				
			});

        
        }).catch(function (error) {
            console.error(error)
        })
    };

    const init = function() {
    
        for (let i = 0; i < obj.length; i ++) {
            initMap(obj[i]);
        }       
    }
    
    
    obj.length > 0 ? init() : false;
    
})();


