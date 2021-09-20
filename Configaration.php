<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,'bank');

	if(!$conn){
		die("Cant connect to database --> ".mysqli_connect_error());
	}

?>
