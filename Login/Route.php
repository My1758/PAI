<?php 
	include_once "Controller/Controller.php";
	$methodGet = isset($_GET['method']) ? trim($_GET['method']) : '';
	$method = new Login_Controller();
	switch ($methodGet) {
		case 'checkLogin':
			if (isset($_GET['method']) && $_GET['method']=='checkLogin') {
				$method->store();
			}
			break;
		
		default:
			$method = new Subject_Controller();
			$method->index();
			break;
	}
 ?>