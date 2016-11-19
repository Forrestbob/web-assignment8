<?php
$servername = "codd.cs.gsu.edu";
$username = "fwong1";
$password = "fwong1";
$dbname = "fwong1";

// Create connection
		/* new mysqli*/
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
	echo "Test Database Connection";
}

?>
