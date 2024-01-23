<?php 
	$SERVERNAME = "localhost";
	$DBNAME = "project";
	$USERNAME = "root";
	$PASSWORD = "";
	$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
	if(!$conn){
		die("Connect fail");
	}
 ?>