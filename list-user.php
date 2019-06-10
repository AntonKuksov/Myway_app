<?php 

$con = mysqli_connect("127.0.0.1:3306", "root", "", "testing"); 
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


 		
 		$sqltran = mysqli_query($con, "SELECT * FROM ways ")or die(mysqli_error($con));
		$arrVal = array();

		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
								'num' => $i,
 	 		 	 				'location' => $rowList['location'],
	 		 	 				'type' => $rowList['type'],
	 		 	 				'distance' => $rowList['distance'],
	 		 	 				'rank' => $rowList['rank'],
	 		 	 				'date' => $rowList['date']
	 		 	 				
 	 		 	 			);		


							array_push($arrVal, $name);	
			$i++;			
	 	}
	 		 echo  json_encode($arrVal);		
 

	 	mysqli_close($con);
?>   
 