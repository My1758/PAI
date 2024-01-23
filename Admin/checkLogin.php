<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		
	}
	else{
		echo '<script>
			alert("You are not logged in");
			window.location="http://localhost/project/Login";
		</script>';
	}
 ?>