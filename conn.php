<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_create_excel');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>