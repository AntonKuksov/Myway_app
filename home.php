<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

	<link type="text/css" href="table/css/bootstrap-table.css" rel="stylesheet">
	<link type="text/css" href="table/css/font-awesome.css" rel="stylesheet">

	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.css' rel='stylesheet' />
	<style>
		/* body {
			margin: 0;
			padding: 0;
		} */

		#map {
			position: absolute;
			top: 4em;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>

<body>


	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
		<a class="navbar-brand" href="#">Top navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">My Trips</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">My Account</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>

			</ul>
			<form class="form-inline mt-2 mt-md-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="row">
	<div class="col-md-6">
		<div class="page-header">
			<h1>
			  Find the best route!
			</h1>
		</div>


		<div class="panel panel-success">

			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					 
						<table 	id="table"
			                	data-show-columns="true"
 				                data-height="460">
						</table>
					</div>
				</div>
			</div>				
		</div>

	</div>

	<div class="col-md-6">

		<!-- <button onclick="getLocation()">Try It</button> -->
		<p id="demo"></p>
		<div id='map'></div>
		
		</div>
	</div>

	<script src="table/js/jquery-1.11.1.min.js"></script>
	<script src="table/js/bootstrap.min.js"></script>
	<script src="table/js/bootstrap-table.js"></script>

	<script>

	
		mapboxgl.accessToken = 'pk.eyJ1IjoiYW50a3VrIiwiYSI6ImNqd2o3enRqejAwb2Y0OHBqaHZjMW03YzcifQ.U6SfQXTKYD-etKuREAD5EQ';

		window.onload = function () {
			getLocation();    
		}

		var x = document.getElementById("demo");
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function showPosition(position) {


			x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
			var latlon = [position.coords.longitude, position.coords.latitude];
			

			var map = new mapboxgl.Map({
				container: 'map', // container id
				style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
				center: latlon, // starting position [lng, lat]
				zoom: 12 // starting zoom                  
			});

		}
	
	</script>

	<script type="text/javascript">
	
	var $table = $('#table');
			$table.bootstrapTable({
				 url: 'list-user.php',
				 pagination: true,
				 buttonsClass: 'primary',
				 showFooter: true,
				 minimumCountColumns: 2,
				 columns: [{
					 field: 'num',
					 title: '#',
					 sortable: true,
				 },{
					 field: 'location',
					 title: 'Location',
					 sortable: true,
				 },{
					 field: 'type',
					 title: 'Type',
					 sortable: true,
					 
				 },{
					 field: 'distance',
					 title: 'Distance',
					 sortable: true,
					 
				 },{
					 field: 'rank',
					 title: 'Rank',
					 sortable: true,
					 
				 },{
					 field: 'date',
					 title: 'Date',
					 sortable: true,
					 
				 },  
				
				],

				onClickRow: function (row, $element) {
				// row: the record corresponding to the clicked row, 
				// $element: the tr element.
				console.log(row, $element);
    }
				
			  });

</script>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>