<?php
	//for MySQLi OOP
	// $conn = new mysqli('localhost', 'root', '', 'mydatabase');
	// if($conn->connect_error){
	//    die("Connection failed: " . $conn->connect_error);
	// }
	////////////////

	//for MySQLi Procedural
	$conn = mysqli_connect('localhost', 'root', '', 'mdatabase_2');
	if(!$conn){
	    die("Connection failed: " . mysqli_connect_error());
	}
	////////////////
?>