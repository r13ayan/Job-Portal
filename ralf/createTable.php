<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "myDB";

	$conn = mysqli_connect($servername, $username, $password, $databaseName);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// sql to create table
	$sql = "CREATE TABLE person (
			FirstName varchar(15),
			LastName varchar(15),
			Age int
			)";

	if (mysqli_query($conn, $sql)) {
	    echo "Table person created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
