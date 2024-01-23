<?php 
	require_once "../Controller/Controller.php";
	$controllerGet = isset($_GET['controller']) ? trim($_GET['controller']) : '';
	$controller = new Plan_Controller();
	switch ($controllerGet) {
		case 'accept':
			$controller->accept();
			break;
		case 'search':
			$controller->search();
			break;
		default:
			break;
	}
 ?>