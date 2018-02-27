<?php
			include 'db/db.php';
			//select queries into database
			$query = "SELECT * FROM users";
			//connect query with database
			$result = mysqli_query($connection,$query);
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

<?php 

while ($row = mysqli_fetch_assoc($result)) {

?>
	<pre>
		<?php  

	print_r($row);

		?>
	</pre>

<?php
}

?>
	</div>
</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>