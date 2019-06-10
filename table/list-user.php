<?php 

$con = mysqli_connect("127.0.0.1:3306", "root", "", "testing"); 
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


 		
 		$sqltran = mysqli_query($con, "SELECT * FROM users ")or die(mysqli_error($con));
		$arrVal = array();
 		
		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
								'num' => $i,
 	 		 	 				'username'=> $rowList['username'],
	 		 	 				'email'=> $rowList['email']
 	 		 	 			);		


							array_push($arrVal, $name);	
			$i++;			
	 	}
	 		 echo  json_encode($arrVal);		
 

	 	mysqli_close($con);
?>   
 