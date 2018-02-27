<?php

	$welcome = $usernameError = $passwordError = $connected = $queryConnected = "";	
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username && $password) {
			$welcome = "Account created successfully !";
		} elseif (empty($username)) {
			$usernameError = "this field is required";
		} elseif (empty($password)) {
			$passwordError = "this field is required";
		}


		if (!empty($username) && !empty($password) ) {
			//connect to the database
			$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
			//inserting queries into database
			$query = "INSERT INTO users(username, password) VALUES ('$username','$password')";
			//connect query with database
			mysqli_query($connection,$query);
		}
	
	}



?>

<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>form login with database</title>
</head>
<body>

<div class = "container">
	<div class="wrapper">
		<form action="form_create.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading"><?php echo $welcome; ?></h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="username" placeholder="Username" autofocus="" />
			  <span><?php echo $usernameError; ?></span><br>
			  <input type="password" class="form-control" name="password" placeholder="Password"/>     		  
			  <span><?php echo $passwordError;?></span>
			  <button class="btn btn-lg btn-primary btn-block"  name="submit" value="create" type="Submit">create</button>
			  <h3 style="color: green" class="form-signin-heading"></h3>  			
		</form>			
	</div>
</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>