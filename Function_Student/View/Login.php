<?php
	session_start();
	$_SESSION['user'] = $_GET['maSv'];
	echo '<script>
		alert("Logged in successfully");
		window.location="http://localhost/project/Function_Student/View";
	</script>';
 ?>