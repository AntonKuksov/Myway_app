<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="project_css.css">

	<link type="text/css" href="table/css/bootstrap-table.css" rel="stylesheet">
	<link type="text/css" href="table/css/font-awesome.css" rel="stylesheet">

	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.css' rel='stylesheet'/>
	<script type="text/javascript" src="map.js"></script>
	<style>
		/* body {
			margin: 0;
			padding: 0;
		} */

		#map {
			position: absolute;
			top: 4em;
			bottom: 0;
			width: 95%;
			
		}
	</style>
</head>
<body id="background" background="image1.jpg">
	<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style= "margin:25px 100px; border-radius: 10px; height:7%; width:85%;">
                <a class="navbar-brand" style="margin-left:125px;"><img src="bootprint.png" style="width:100%; height:150%;"></a>
                <button class="navbar-toggler navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 50px; font-family: 'Roboto', sans-serif; font-size: 18;">
                  <ul class="navbar-nav">
                    <li class="nav-item sim-button" style="margin-left: 100px;">
                      <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item sim-button" style="margin-left: 100px;">
                      <a class="nav-link" href="#">Account</a>
                    </li>
                    <li class="nav-item sim-button" style="margin-left: 100px;">
                      <a class="nav-link" href="#">Info</a>
                    </li>
                    <li class="nav-item sim-button" style="margin-left: 100px;">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="sim-button" style="margin-left: 150px;">
                        <a class="nav-link" href="#">est</a>
                    </li>
                    <li class="sim-button" style="margin-left: 50px;">
                        <a class="nav-link" href="#">eng</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </header>			
	<div class="row">
	<div class="col-md-6">
		<div class="page-header">
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
	<div class="row">
		<div class="col-lg-6"><!-- style="border: 1px solid black" --></div>
		<div class="col-lg-6"><!-- style="border: 1px solid black" -->
		<a class="btn btn-primary sim-button" href="#" role="button" data-toggle="modal" data-target=".bd-example-modal-xl"
		style="margin-left:175px; margin-top: 100px; margin-bottom:80px; border-radius: 10px; width:40%">
		<span>CREATE A PATH ----></span></a>
			<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
				<div class="container">
					<div class="row" style="margin-top:50px">
					<div class="col-lg-3"  style="padding: 0px;"> <!--border: 1px solid white;   --> 
						<p style="margin-left:45px; margin-top:125px">Start:</p>  
						<p style="margin-left:45px; margin-top:50px">Finish:</p>
						<p style="margin-left:45px; margin-top:173px">Activity:
						<button style="margin-left:85px;">
							<img src="runner2.png">
						</button>
						</p>
					</div>
					<div class="col-lg-3" style="padding: 0px;">
						<div>
							<input id="input" class="form-control form-control-sm" type="text" placeholder="coordinates"> 
							<input class="form-control form-control-sm" type="text" placeholder="coordinates"
							style="margin-left:0px; margin-top:40px; margin-bottom:170px; border-radius: 10px; width:70%;">
						</div>
					<div>
						<button>
							<img src="hiker2.png">
						</button>
						<button>
							<img src="cyclist2.png" > 
						</button>
						<button>
							<img src="skier2.png"  >
						</button>
					</div>
					</div>
					<div class="col-lg-6" style="border: 1px solid white; margin-right:px;">
						<p id="demo"></p>
						<div id='map'></div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6"><!-- style="border: 1px solid white;" -->
						<a class="btn btn-primary sim-button" href="" 
						role="button" style="margin-left:200px; margin-top:100px; margin-bottom:100px; border-radius: 10px">
							<span>BACK</span></a>
						
					</div>
					<div class="col-lg-6"><!-- style="border: 1px solid white;" -->
						<a class="btn btn-primary sim-button" href="#" 
						role="button" style="margin-left:200px; margin-top:100px; margin-bottom:100px; border-radius: 10px">
							<span>SAVE</span></a>
					</div>   
					</div> 
				</div>
				</div>
			</div>
			</div>
		</div> 
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
				zoom: 11 // starting zoom                  
			});

		}
	

	
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

				var startPoint = row.startpoint.split(',');
				var endPoint = row.endpoint.split(',');

				console.log(startPoint, endPoint);
				ShowRoute(startPoint, endPoint);
				
				}
				
			  });

</script>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>