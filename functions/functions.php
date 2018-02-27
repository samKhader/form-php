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

?>