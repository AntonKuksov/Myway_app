<?php  
 include 'database.php';  
 session_start();  
 $data = new Databases;  
 $message = '';  


 if(isset($_POST['signup']))
 {  
    $username = $_POST['username'];  
	$password = $_POST['password'];
	$email = $_POST['email'];    
	$confirmPassword = $_POST['confirmPassword'];    	
     
		if($password == $confirmPassword){  
            $emailCheck = $data->isUserExist($email);  
            if(!$emailCheck){  
                $register = $data->UserRegister($username, $password, $email);  
                if($register){  
                     echo "<script>alert('Registration Successful')</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  

 if(isset($_POST['login']))  
 {  
      $field = array(  
           'username'     =>     $_POST["username"],  
           'password'     =>     $_POST["password"]  
      );  
      if($data->required_validation($field))  
      {  
           if($data->can_login("users", $field))  
           {  
                $_SESSION["username"] = $_POST["username"];  
				echo "<script>alert('You are WELCOM!')</script>";  			   
				header("location:home.php");  
           }  
           else  
           {  
				$message = $data->error;
				echo "<script>alert('GTFO')</script>";    
           }  
      }  
      else  
      {  
           $message = $data->error;  
      }  
 }  
 ?>  



<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="main_styles.css">
</head>

<body>


	<div class="container">

		<div id="SignUpCard"></div>
		<div id="LogInCard"></div>
		<div id="look2">
			<div class="row d-flex h-100 animateMe">
				<div class="mx-auto my-auto">
					<h4>GO FOR A WALK</h4>
					<div class="buttons">
						<input id="foo" class="mr-4 btn btn-primary btn-lg" type="submit" name="button" value="SIGN IN" />
						<input id="foo2" class="btn btn-primary btn-lg" type="submit" name="button2" value="LOG IN" />
					</div>
				</div>
			</div>
		</div>

	</div>

	<script id="blockOfSignUpCard" type="text/html">
		<div class="row py-5 my-5">
			<div class="col-lg-5 col-xl-4 mx-auto">
				<div class="card card-signin flex-row my-5" style="background-color:transparent">
					<div class="card-body">
						<h5 class="card-title text-center">Sign Up</h5>
						<form class="form-signin" action="users.php" method="post" autocomplete="off">
							<div class="form-label-group">
								<input type="text" name="username" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
							</div>
							<hr>
							<div class="form-label-group">
								<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
							</div>
							<hr>
							<div class="form-label-group">
								<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
							</div>
							<hr>
							<div class="form-label-group">
								<input type="password" name="confirmPassword" id="inputConfirmPassword" class="form-control" placeholder="Confirm password" required>
							</div>
							<hr>
							<button id="SignButton" class="btn btn-lg btn-primary btn-block text-uppercase" name="signup" type="submit">Sign Up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</script>

	<script id="blockOfLogInCard" type="text/html">
		<div class="row py-5 my-5">
			<div class="col-lg-5 col-xl-4 mx-auto">
				<div class="card card-signin flex-row my-5" style="background-color:transparent">
					<div class="card-body">
						<h5 class="card-title text-center">Log In</h5>
						<form class="form-signin" action="users.php" method="post" autocomplete="off">
							<div class="form-label-group">
								<input type="text" name="username" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
							</div>
							<hr>
							<div class="form-label-group">
								<input type="password" name="password" id="inputPassword" class="form-control" placeholder="******" required>
							</div>
							<hr>
							<div class="form-group">
								<div class="checkbox">
									<label> <input type="checkbox"> Save password </label>
								</div>
							</div>
							<button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</script>

	<script src="scriptAll.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>