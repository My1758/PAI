<?php
	session_start();
	$_SESSION['user'] = $_GET['maGv'];
	echo '<script>
		alert("Logged in successfully");
		window.location="http://localhost/project/Admin";
	</script>';
 ?>