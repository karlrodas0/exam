<?php
	$server = "localhost";
	$database = "exam";
	$username = "root";
	$password = "";

	$con = mysqli_connect($server, $username, $password, $database);

	#checks connection to database
	#echo mysqli_ping($con) ? 'Connection successful.' : 'Connection failed';
?>