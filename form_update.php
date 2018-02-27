<?php include 'db/db.php'; ?>
<?php include 'functions/functions.php'; ?>



<?php 

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username' , ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";
	mysqli_query($connection,$query);
	

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
		<form action="form_update.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading"></h3>
			  <hr class="colorgraph">
			  
			  <label for="username">Username:</label>
			  <input type="text" class="form-control" name="username" placeholder="Username" autofocus="" /><br>

			  <label for="password">Password:</label>
			  <input type="password" class="form-control" name="password" placeholder="Password"/> 
			  
			  <label>Select ID from the database:</label>    		  
			  <select class="form-control"  name="id">
				<?php showAll ();?>			  	
			  </select><br>
			  <button class="btn btn-lg btn-primary btn-block"  name="submit" value="update" type="Submit">update</button>
					
		</form>			
	</div>
</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>