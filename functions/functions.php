<?php include 'db/db.php';

function showAll () {
	global $connection;
	//select queries into database
	$query = "SELECT * FROM users";
	//connect query with database
	$result = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}


function update(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username' , ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";
	mysqli_query($connection,$query);
	

}

function delete(){
	global $connection;
	$id = $_POST['id'];
	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";
	mysqli_query($connection,$query);
	

}






?>