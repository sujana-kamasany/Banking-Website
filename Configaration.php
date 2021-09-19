<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,'bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>