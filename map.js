
class Route {

	
	constructor(startpoint, endpoint) {
		this.startpoint = startpoint;
		this.endpoint = endpoint;
		
	  }

	  
	  
showPosition(po, container) {

	console.log(po, container);

	var map = new mapboxgl.Map({
		container: container, // container id
		style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
		center: po, // starting position [lng, lat]
		zoom: 12 // starting zoom                  
	});

		var x = document.getElementById("demo");
		//x.innerHTML = point;

}

getLocation(loc) {

	
		if (navigator.geolocation) {
			
			navigator.geolocation.getCurrentPosition(writeposition);

			function writeposition(position){
				var p = [position.coords.longitude, position.coords.latitude];
				route.showPosition(p,loc);
			}

		} else {
			return "Geolocation is not supported by this browser.";
		}


}


ShowRoute(startpoint, endpoint){


			
			var latlon = startpoint;
			var coords2 = endpoint;

			var map = new mapboxgl.Map({
				container: 'map', // container id
				style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
				center: latlon, // starting position [lng, lat]
				zoom: 11 // starting zoom                  
			});

			// initialize the map canvas to interact with later
			var canvas = map.getCanvasContainer();

			// an arbitrary start will always be the same
			// only the end or destination will change
			var start = latlon;


			var marker = new mapboxgl.Marker()
				.setLngLat(latlon)
				.addTo(map);


// create a function to make a directions request
			function getRoute(end) {
				// make a directions request using cycling profile
				// an arbitrary start will always be the same
				// only the end or destination will change
				var start = latlon;

				var url = 'https://api.mapbox.com/directions/v5/mapbox/cycling/' + start[0] + ',' + start[1] + ';' + end[0] + ',' + end[1] + '?steps=true&geometries=geojson&access_token=' + mapboxgl.accessToken;

				// make an XHR request https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
				var req = new XMLHttpRequest();
				req.responseType = 'json';
				req.open('GET', url, true);
				req.onload = function () {
					var data = req.response.routes[0];
					var route = data.geometry.coordinates;
					var geojson = {
						type: 'Feature',
						properties: {},
						geometry: {
							type: 'LineString',
							coordinates: route
						}
					};
					// if the route already exists on the map, reset it using setData
					if (map.getSource('route')) {
						map.getSource('route').setData(geojson);
					} else { 
						// otherwise, make a new request
						map.addLayer({
							id: 'route',
							type: 'line',
							source: {
								type: 'geojson',
								data: {
									type: 'Feature',
									properties: {},
									geometry: {
										type: 'LineString',
										coordinates: geojson
									}
								}
							},
							layout: {
								'line-join': 'round',
								'line-cap': 'round'
							},
							paint: {
								'line-color': '#3887be',
								'line-width': 5,
								'line-opacity': 0.75
							}
						});
					
						
					var end = {
						type: 'FeatureCollection',
						features: [{
							type: 'Feature',
							properties: {},
							geometry: {
								type: 'Point',
								coordinates: coords2
							}
						}
						]
					};
					if (map.getLayer('end')) {
						map.getSource('end').setData(end);
					} else {
						map.addLayer({
							id: 'end',
							type: 'circle',
							source: {
								type: 'geojson',
								data: {
									type: 'FeatureCollection',
									features: [{
										type: 'Feature',
										properties: {},
										geometry: {
											type: 'Point',
											coordinates: coords2
										}
									}]
								}
							},
							paint: {
								'circle-radius': 10,
								'circle-color': '#f30'
							}
						});
					}
					getRoute(coords2);
					
					}
					// add turn instructions here at the end
				};
				req.send();
			}

			map.on('load', function () {
				// make an initial directions request that
				// starts and ends at the same location
				getRoute(start);

				// Add starting point to the map
				map.addLayer({
					id: 'point',
					type: 'circle',
					source: {
						type: 'geojson',
						data: {
							type: 'FeatureCollection',
							features: [{
								type: 'Feature',
								properties: {},
								geometry: {
									type: 'Point',
									coordinates: start
								}
							}
							]
						}
					},
					paint: {
						'circle-radius': 10,
						'circle-color': '#3887be'
					}
				});

            });
            
		}
}