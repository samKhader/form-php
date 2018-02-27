<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>


<?php

if (isset($_POST['submit'])) { //if form is submitted
	$username = $_POST['username']; //username
	$password = $_POST['password']; //password
	if (empty($username) && empty($password)) { //if both are empty
		echo "Please enter your username and your password!";
	} elseif (empty($password)) { //if password is empty
		echo "please enter your password";
	} elseif (empty($username)) { //if username is empty
		echo "please enter your username";
	} else { // else echo
		echo "Hello ".$username . "<br>";
		echo "Your password is ".$password. "<br>";
		echo "Thank you for login";
	}
}

?>

<!-- START FROM DATA -->
<form action="form.php" method="post">
	Username: <input type="text" name="username" placeholder="enter username"><br>
	Password: <input type="password" name="password" placeholder="enter password"><br>
	<input type="submit" name="submit">
</form>
<!-- END FORM DATA -->






</body>
</html>