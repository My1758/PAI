<?php
	session_start();
	$_SESSION['user'] = $_GET['maGv'];
	echo '<script>
		alert("Login successfull");
		window.location="http://localhost/project/Function_Teacher/View";
	</script>';
 ?>